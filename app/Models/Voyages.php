<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyages extends Model
{
    public $timestamps = false;
    protected $table= 'voyages';
    protected $fillable = [
        'ship_id',
        'code',
        'start',
        'finish',
        'status',
        'income',
        'expenses',
        'kerdos'
    ];
}
