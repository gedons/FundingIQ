<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Transaction;
use App\Models\User;
use Auth;

class DashboardController extends Controller
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
         $user = Auth::user();
         $withdrawals = auth()->user()->transactions()->get();

        return view('trader.dashboard', compact('cryptos','user','withdrawals'));

    }

    public function profile(){

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

        $trader = Auth::user();

        return view('trader.profile', compact('cryptos','trader'));
    }

    public function fund(){

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

        $transactions = Auth::user()->transactions()->orderBy('transaction_date', 'desc')->get();

        return view('trader.fund', compact('cryptos','transactions'));
    }

    public function withdraw(){
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

        return view('trader.withdraw',  compact('cryptos'));
    }

    public function upload(){
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

        return view('trader.upload', compact('cryptos'));
    }

    public function trade(){
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

        return view('trader.trade', compact('cryptos'));
    }
}
