<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popup;

class PopupController extends Controller
{
    public function randomPopup()
    {
     // Fetch a random popup from the database
     $popup = Popup::inRandomOrder()->first();

     return response()->json([
         'country' => $popup->country,
         'amount' => $popup->amount,
         'action' => $popup->action,
     ]);
    }
}
