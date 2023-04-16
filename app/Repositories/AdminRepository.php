<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Repositories\BaseRepository;

class AdminRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Admin::class;
    }
}
