<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    use HasFactory;

    protected $fillable = [
        'reg_number',
        'name',
        'email',
        'faculty',
        'department',
        'phone_number',
        'paymentStatus',
        'amount',
        'amount_settled',
        'tx_ref',
        'txr_id'
    ];
}
