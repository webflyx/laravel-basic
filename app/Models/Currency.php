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
        'price',
        'active',
        'sort',
    ];

    //For security fields (exmp password, api etc.)
    protected $hidden = ['price'];

    //For change col type in response
    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'sort' => 'integer',
    ];

    //For convert date to object (for have chanse to convert)
    protected $dates = ['created_at'];
}
