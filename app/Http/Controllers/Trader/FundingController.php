<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\FundingNotification;
use Illuminate\Support\Facades\Http;
use Log;

class FundingController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'method' => 'required|in:btc,eth,usdt',
            'transaction_type' => 'required|string|in:funding,withdrawal',
        ]);

        // Create the transaction with pending status
        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'amount' => $request->input('amount'),
            'method' => $request->input('method'),
            'status' => 'pending',
            'transaction_type' => $request->transaction_type,
            'charge' => $this->calculateCharge($request->input('amount')),
        ]);

        // Send an email to the user
        Mail::to(Auth::user()->email)->send(new FundingNotification($transaction));

        // Redirect to confirm payment page
        return redirect()->route('trader.fund.confirm', $transaction->id);
    }

    // Dummy method to calculate transaction charge
    private function calculateCharge($amount)
    {
        // Example: 1% charge
        return $amount * 0.01;
    }

    // Confirm payment page
    public function confirm($id)
    {
        $apiKey = env('CRYPTOCOMPARE_API_KEY');

        $response = Http::withOptions(['verify' => false, 'timeout' => 30])
        ->withHeaders([
            'Authorization' => 'Apikey ' . $apiKey,
        ])
        ->get('https://min-api.cryptocompare.com/data/pricemultifull', [
            'fsyms' => 'BTC,ETH,LTC,XRP,DOGE,USDT,BUSD,SOL',
            'tsyms' => 'USD',
        ]);
        $cryptos = $response->json();

        $confirm_transactions = Auth::user()->transactions()->orderBy('transaction_date', 'desc')->get();

        $transaction = Transaction::findOrFail($id);

        if (!$transaction || $transaction->status != 'pending') {
            return redirect()->route('trader.fund')->with('error', 'Transaction not found or cannot be confirmed.');
        }

        // Define wallet addresses and QR codes for BTC, ETH, and USDT
        $cryptoWallets = [
            'btc' => [
                'address' => '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa',
                'qr' => asset('assets/images/qr-codes/frame.png'),
            ],
            'eth' => [
                'address' => '0x32Be343B94f860124dC4fEe278FDCBD38C102D88',
                'qr' => asset('assets/images/qr-codes/frame1.ico'),
            ],
            'usdt' => [
                'address' => 'T9yD14Nj9j7xAB4dbGeiX9h8unkKHxuWwb',
                'qr' => asset('assets/images/qr-codes/frame2.ico'),
            ],
        ];

        $selectedWallet = $cryptoWallets[strtolower($transaction->method)] ?? null;

        return view('trader.confirm', compact('transaction','cryptos','confirm_transactions','selectedWallet'));
    }

    public function uploadProofOfPayment(Request $request, $id)
    {
        try {
            $request->validate([
                'proof_of_payment' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048', // Validate file type and size
            ]);

            $transaction = Transaction::findOrFail($id);

            if (!$transaction || $transaction->status != 'pending') {
                return redirect()->back()->with('error', 'Transaction not found or is not pending.');
            }

            // Handle the file upload
            if ($request->hasFile('proof_of_payment')) {
                $file = $request->file('proof_of_payment');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('proof_of_payments', $filename, 'public');

                // Update transaction with proof of payment and mark as 'requested'
                $transaction->proof_of_payment = $path;
                $transaction->status = 'requested'; // Change status to 'requested'
                $transaction->save();

                Log::info('Proof of payment uploaded successfully: ' . $path);

                return redirect()->route('trader.fund', $transaction->id)->with('success', 'Proof of payment uploaded successfully. Payment will be approved soon!');
            }

            return redirect()->back()->with('error', 'No file was uploaded.');
        } catch (\Exception $e) {
            Log::error('Proof of payment upload failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to upload proof of payment. Please try again.');
        }
    }


}
