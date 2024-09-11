<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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


        return view('trader.dashboard', compact('cryptos'));

    }

    public function profile(){
        return view('trader.profile');
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

        return view('trader.fund', compact('cryptos'));
    }

    public function withdraw(){
        return view('trader.withdraw');
    }

    public function upload(){
        return view('trader.upload');
    }

    public function trade(){
        return view('trader.trade');
    }
}
