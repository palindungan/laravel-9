<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $table = 'guests';

    public $fillable = [
        'code',
        'name',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'place',
        'address'
    ];

    protected $casts = [
        'code' => 'string',
        'name' => 'string',
        'date_start' => 'date',
        'date_end' => 'date',
        'place' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'code' => 'nullable|string|max:255',
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'date_start' => 'nullable',
        'date_end' => 'nullable',
        'time_start' => 'nullable',
        'time_end' => 'nullable',
        'place' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:65535'
    ];
}
