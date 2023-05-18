<?php

namespace App\Repositories;

use App\Models\Event;
use App\Repositories\BaseRepository;

class EventRepository extends BaseRepository
{
    protected $fieldSearchable = [
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
        return Event::class;
    }
}
