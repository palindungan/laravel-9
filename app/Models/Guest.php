<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public $table = 'guests';

    public $fillable = [
        'code',
        'name'
    ];

    protected $casts = [
        'code' => 'string',
        'name' => 'string'
    ];

    public static array $rules = [
        'code' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
