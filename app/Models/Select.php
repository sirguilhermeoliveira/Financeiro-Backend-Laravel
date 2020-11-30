<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    protected $fillable = [
        'id',
        'novadespesa',
        'created_at'

    ];
    public $timestamps = false;
}

