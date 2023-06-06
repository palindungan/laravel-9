<?php

namespace App\Repositories;

use App\Models\Guest;
use App\Repositories\BaseRepository;

class GuestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'code',
        'name',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'place',
        'address'
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
