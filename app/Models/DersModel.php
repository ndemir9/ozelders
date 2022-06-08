<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DersModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'dersadi',
        'derskonusu',
        'ogretmenadi',
        'telefonnumarasi',
        'image',
    ];
}
