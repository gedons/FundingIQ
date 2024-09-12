<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'amount', 'method', 'status', 'charge', 'transaction_date', 'proof_of_payment'
    ];

    // Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
