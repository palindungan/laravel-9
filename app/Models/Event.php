<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';

    public $fillable = [
        'name',
        'start',
        'end',
        'place',
        'address'
    ];

    protected $casts = [
        'name' => 'string',
        'start' => 'datetime',
        'end' => 'datetime',
        'place' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'start' => 'required',
        'end' => 'required',
        'place' => 'required|string|max:255',
        'address' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
