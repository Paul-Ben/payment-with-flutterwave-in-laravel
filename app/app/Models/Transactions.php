<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'reg_number',
        'name',
        'email',
        'phone_number',
        'faculty',
        'department',
        'paymentStatus',
        'amount',
        'amount_settled',
        'tx_ref',
        'txr_id'
    ];
}
