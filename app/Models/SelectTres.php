<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectTres extends Model

{

    protected $fillable = [
        'id',
        'receitanovadespesa',
        'created_at'
    ];
    public $timestamps = false;
    protected $table = 'selects_tres';
}

