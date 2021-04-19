<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    public $timestamps = false;
    protected $table= 'ship';
    protected $fillable = [
        'ship_name',
        'number_IMO'
    ];
}
