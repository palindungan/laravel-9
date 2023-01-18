<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Admin extends Model implements Auditable
{
    use AuditableTrait;

    // protected $guarded = [];
    // protected $auditInclude = [];
    // protected $auditExclude = [];

    public $table = 'admin';

    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'photo',
        'attachment'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'photo' => 'string',
        'attachment' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'nullable|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'photo' => 'nullable|image|max:500',
        'attachment' => 'nullable|file|max:500'
    ];
}
