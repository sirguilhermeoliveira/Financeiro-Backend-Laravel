<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = [
        'id',
        'des',
        'valr',
        'vencc',
        'stt',
        'emiss',
        'created_at'
    ];
}
