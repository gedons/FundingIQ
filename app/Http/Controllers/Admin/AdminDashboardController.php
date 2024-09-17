<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\KycApprovedNotification;
use App\Notifications\KycRejectedNotification;
use Auth;

class AdminDashboardController extends Controller
{
    public function dashboard()
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
         $userCount = User::count();
         $users = User::orderBy('created_at', 'desc')->get();
         $totalApprovedBalance = Transaction::where('status', 'approved')->sum('amount');

        return view('admin.dashboard', compact('cryptos','userCount', 'users','totalApprovedBalance'));

    }

    public function users(){
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
         $users = User::orderBy('created_at', 'desc')->get();
         return view('admin.users', compact('cryptos','users'));
    }

    public function show($id)
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
        // Get user by ID
        $user = User::findOrFail($id);

        // Get all transactions of the user
        $transactions = Transaction::where('user_id', $id)->orderBy('transaction_date', 'desc')->get();

        return view('admin.usershow', compact('user', 'cryptos', 'transactions'));
    }

    public function transactions(){
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


         $allTransactions = Transaction::orderBy('transaction_date', 'desc')->get();

         return view('admin.transactions', compact('cryptos','allTransactions'));
    }


    public function trades(){
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
         return view('admin.trades', compact('cryptos'));
    }

    public function kyc(){
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
         $users = User::where('kyc_status', 'pending')->where('role', '!=', 'admin')->get();
         return view('admin.kyc', compact('cryptos','users'));
    }

        // Approve KYC
        public function approveKyc($id)
        {
            $user = User::findOrFail($id);
            $user->kyc_status = 'approved';
            $user->save();

            $user->notify(new KycApprovedNotification());

            // Optionally, send email notification to user about approval
            return redirect()->back()->with('success', 'KYC approved successfully.');
        }

        // Reject KYC
        public function rejectKyc($id)
        {
            $user = User::findOrFail($id);
            $user->kyc_status = 'rejected';
            $user->save();

            $user->notify(new KycRejectedNotification());

            // Optionally, send email notification to user about rejection
            return redirect()->back()->with('success', 'KYC rejected.');
        }

        public function updateInvestment(Request $request, $id)
        {
            $request->validate([
                'invested_amount' => 'required|numeric|min:0',
                'profit' => 'required|numeric|min:0',
                'bonus' => 'required|numeric|min:0',
            ]);

            $user = User::findOrFail($id);

            // Update the user's investment details
            $user->invested_amount = $request->input('invested_amount');
            $user->profit = $request->input('profit');
            $user->bonus = $request->input('bonus');
            $user->save();

            return redirect()->back()->with('success', 'Investment details updated successfully.');
        }

}
