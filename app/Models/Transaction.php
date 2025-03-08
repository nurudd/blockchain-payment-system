<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'amount',
        'commission',
        'type',
        'status',
    ];

    const BLOCKCHAIN_COMMISSION = 0.05; // 5%
    const MANUAL_COMMISSION = 0.02; // 2%
}
