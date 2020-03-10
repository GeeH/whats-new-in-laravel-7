<?php

namespace App;

use App\Cast\AmountCast;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $casts = [
        'amount' => AmountCast::class
    ];
}
