<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Greeting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
