<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usersavings extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid', 'goalimagesrc', 'goalname', 'goalamount', 'amountsaved','amountleft'
        
    ];

}
