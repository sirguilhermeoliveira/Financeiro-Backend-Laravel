<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectQuatro extends Model
{
    protected $fillable = [
        'id',
        'receitanovoplanocontas',
        'created_at'
    ];
    public $timestamps = false;
    protected $table = 'selects_quatro';
}
