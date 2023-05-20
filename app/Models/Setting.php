<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $table = 'settings';

    public $fillable = [
        'code',
        'name',
        'value'
    ];

    protected $casts = [
        'code' => 'string',
        'name' => 'string',
        'value' => 'string'
    ];

    public static array $rules = [
        'code' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'value' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
