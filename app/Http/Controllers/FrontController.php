<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index()
    {
        //  $apiKey = env('CRYPTOCOMPARE_API_KEY');

        //  $response = Http::withOptions(['verify' => false])
        //  ->withHeaders([
        //      'Authorization' => 'Apikey ' . $apiKey,
        //  ])
        //  ->get('https://min-api.cryptocompare.com/data/pricemultifull', [
        //      'fsyms' => 'BTC,ETH,LTC,XRP,DOGE,USDT,BUSD,SOL',
        //      'tsyms' => 'USD',
        //  ]);

        //  $cryptos = $response->json();

        //  $coinListResponse = Http::withOptions(['verify' => false])
        //  ->withHeaders([
        //     'Authorization' => 'Apikey ' . $apiKey,
        // ])->get('https://min-api.cryptocompare.com/data/all/coinlist');

        // $coinList = $coinListResponse->json();

        // return view('front.index', compact('cryptos', 'coinList'));
        return view('front.index');
    }


}
