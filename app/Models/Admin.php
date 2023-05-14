<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = 'admin';

    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'photo',
        'attachment',
        'name_short',
        'name_degree_first',
        'name_degree_last',
        'name_parent_male',
        'name_parent_female'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'photo' => 'string',
        'attachment' => 'string',
        'name_short' => 'string',
        'name_degree_first' => 'string',
        'name_degree_last' => 'string',
        'name_parent_male' => 'string',
        'name_parent_female' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'photo' => 'nullable|image',
        'attachment' => 'nullable|string|max:255',
        'name_short' => 'required|string|max:255',
        'name_degree_first' => 'nullable|string|max:255',
        'name_degree_last' => 'nullable|string|max:255',
        'name_parent_male' => 'nullable|string|max:255',
        'name_parent_female' => 'nullable|string|max:255'
    ];

    
}
