<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $table = 'events';

    public $fillable = [
        'name',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'place',
        'address'
    ];

    protected $casts = [
        'name' => 'string',
        'date_start' => 'date',
        'date_end' => 'date',
        'place' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'date_start' => 'required',
        'date_end' => 'required',
        'time_start' => 'required',
        'time_end' => 'required',
        'place' => 'required|string|max:255',
        'address' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
