<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'photo' => 'nullable|image',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected $appends = ['photo_thumbnail'];
    public function getPhotoThumbnailAttribute()
    {
        if (empty($this->photo)) {
            return asset('image-not-found.jpg');
        }
        return asset(Storage::url("photo_galleries/" . $this->photo));
    }
}
