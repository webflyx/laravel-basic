<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    //If id is string
    public $incrementing = false;

    //Access fields
    protected $fillable = [
        'id',
        'name',
    ];

    
}
