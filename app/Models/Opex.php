<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level2 extends Model
{
    public $timestamps = false;
    protected $table= 'opex';
    protected $fillable = [
        'ship_id',
        'expenses',
        'date'
    ];
}
