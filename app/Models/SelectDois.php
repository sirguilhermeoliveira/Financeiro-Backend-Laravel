<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectDois extends Model
{
    protected $fillable = [
        'id',
        'novoplanocontas',
        'created_at'
    ];
    public $timestamps = false;
}


