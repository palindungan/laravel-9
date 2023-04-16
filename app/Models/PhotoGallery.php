<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    public $table = 'photo_galleries';

    public $fillable = [
        'photo'
    ];

    protected $casts = [
        'photo' => 'string'
    ];

    public static array $rules = [
        'photo' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
