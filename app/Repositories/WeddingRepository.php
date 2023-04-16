<?php

namespace App\Repositories;

use App\Models\Wedding;
use App\Repositories\BaseRepository;

class WeddingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'bride_id',
        'groom_id',
        'main_event_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Wedding::class;
    }
}
