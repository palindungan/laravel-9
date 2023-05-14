<?php

namespace App\Repositories;

use App\Models\Guest;
use App\Repositories\BaseRepository;

class GuestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'code',
        'name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Guest::class;
    }
}
