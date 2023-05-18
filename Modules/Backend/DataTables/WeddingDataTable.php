<?php

namespace Modules\Backend\DataTables;

use App\Models\Wedding;
use App\Repositories\WeddingRepository;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class WeddingDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'backend::weddings.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Wedding $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Wedding $model)
    {
        return WeddingRepository::getData()->select(
            'weddings.*',
            DB::raw('bride.name as bride_name'),
            DB::raw('groom.name as groom_name'),
            DB::raw('events.name as event_name'),
        );
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                // 'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    // Enable Buttons as per your need
                    //                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    //                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    //                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    //                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    //                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['name' => 'events.name', 'title' => 'Acara Utama', 'data' => 'event_name'],
            ['name' => 'bride.name', 'title' => 'Pengantin Perempuan', 'data' => 'bride_name'],
            ['name' => 'groom.name', 'title' => 'Pengantin Pria', 'data' => 'groom_name'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'weddings_datatable_' . time();
    }
}
