<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    public $table = 'greetings';

    public $fillable = [
        'name',
        'greet'
    ];

    protected $casts = [
        'name' => 'string',
        'greet' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'greet' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
