<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TransactionStatusUpdated;
use App\Notifications\WithdrawalStatusUpdateNotification;

class AdminTransactionController extends Controller
{
    // Approve a transaction
    public function approveTransaction($id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($transaction->status == 'requested') {
            $transaction->status = 'approved';
            $transaction->save();

            // Update user's balance if it's a funding transaction
            if ($transaction->transaction_type == 'funding') {
                $user = $transaction->user;
                $user->balance += ($transaction->amount - $transaction->charge);
                $user->save();
            }

            // Notify the user about the approval
            Notification::send($transaction->user, new TransactionStatusUpdated($transaction, 'approved'));

            return redirect()->back()->with('success', 'Transaction approved successfully.');
        }

        return redirect()->back()->with('error', 'Transaction is already processed.');
    }

    public function approveWithdrawal($id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($transaction->transaction_type != 'withdrawal' || $transaction->status != 'pending') {
            return redirect()->back()->with('error', 'Invalid transaction.');
        }

        $transaction->status = 'approved';
        $transaction->save();

        $user = User::findOrFail($transaction->user_id);
        $user->notify(new \App\Notifications\WithdrawalStatusUpdateNotification($transaction, 'approved'));

        return redirect()->back()->with('success', 'Withdrawal approved successfully.');
    }

    // Reject withdrawal
    public function rejectWithdrawal($id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($transaction->transaction_type != 'withdrawal' || $transaction->status != 'pending') {
            return redirect()->back()->with('error', 'Invalid transaction.');
        }

        // Return the funds to the user's balance
        $user = User::findOrFail($transaction->user_id);
        $user->balance += $transaction->amount;
        $user->save();

        $transaction->status = 'rejected';
        $transaction->save();

        $user->notify(new \App\Notifications\WithdrawalStatusUpdateNotification($transaction, 'rejected'));

        return redirect()->back()->with('success', 'Withdrawal rejected and funds returned to user.');
    }

    
}
