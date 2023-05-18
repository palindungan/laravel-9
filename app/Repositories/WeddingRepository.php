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

    public static function getData($param = [])
    {
        $model = Wedding::query();

        $model = $model->leftJoin('admin AS bride', 'bride.id', '=', 'weddings.bride_id');
        $model = $model->leftJoin('admin AS groom', 'groom.id', '=', 'weddings.groom_id');
        $model = $model->leftJoin('events', 'events.id', '=', 'weddings.main_event_id');

        return $model;
    }
}
