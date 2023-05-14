<?php

namespace App\Repositories;

use App\Models\Greeting;
use App\Repositories\BaseRepository;

class GreetingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'guest_id',
        'greet'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Greeting::class;
    }
}
