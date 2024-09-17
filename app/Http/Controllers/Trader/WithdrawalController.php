<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\WithdrawalRequestNotification;
use Auth;

class WithdrawalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:10',
            'method' => 'required|string',
        ]);

        $user = auth()->user();

         // Check if KYC is approved
        if ($user->kyc_status != 'approved') {
            return redirect()->back()->with('error', 'You must complete and get your KYC approved before making a withdrawal.');
        }


        // Check if the user has enough balance
        if ($user->balance < $request->amount) {
            return redirect()->back()->with('error', 'Insufficient balance for withdrawal.');
        }

        // Create the withdrawal transaction
        $withdrawal = Transaction::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'method' => $request->method,
            'status' => 'pending',
            'transaction_type' => 'withdrawal',
            'transaction_date' => now(),
            'charge' => 0, // Set a static or dynamic charge if needed
        ]);

        // Update the user's balance to reflect the pending withdrawal
        $user->balance -= $request->amount;
        $user->save();

        Auth::user()->notify(new WithdrawalRequestNotification($withdrawal));

        return redirect()->route('trader.dashboard')->with('success', 'Withdrawal request submitted successfully.');
    }
}


