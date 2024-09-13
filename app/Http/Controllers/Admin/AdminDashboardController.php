<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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


        return view('admin.dashboard', compact('cryptos'));

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
         return view('admin.users', compact('cryptos'));
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
         return view('admin.transactions', compact('cryptos'));
    }

    public function withdrawals(){
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
         return view('admin.withdrawals', compact('cryptos'));
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
         return view('admin.kyc', compact('cryptos'));
    }
}
