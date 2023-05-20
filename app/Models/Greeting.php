<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    public $table = 'greetings';

    public $fillable = [
        'guest_id',
        'greet'
    ];

    protected $casts = [
        'greet' => 'string'
    ];

    public static array $rules = [
        'guest_id' => 'required',
        'greet' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
