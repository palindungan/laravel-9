<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    public $table = 'weddings';

    public $fillable = [
        'bride_id',
        'groom_id',
        'main_event_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'bride_id' => 'required',
        'groom_id' => 'required',
        'main_event_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
