<?php

namespace Modules\Backend\DataTables;

use App\Models\Greeting;
use App\Repositories\GreetingRepository;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class GreetingDataTable extends DataTable
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

        return $dataTable
            ->editColumn('created_at', function($row) {
                return !empty($row->created_at) ? $row->created_at->format('Y-m-d h:i:s') : '-';
            })
            ->addColumn('action', 'backend::greetings.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Greeting $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Greeting $model)
    {
        return GreetingRepository::getData()->select(
            'greetings.*',
            DB::raw('guests.name as guest_name'),
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
            ['name' => 'greetings.created_at', 'title' => 'Waktu', 'data' => 'created_at'],
            ['name' => 'guests.name', 'title' => 'Tamu Undangan', 'data' => 'guest_name'],
            ['name' => 'greetings.greet', 'title' => 'Ucapan', 'data' => 'greet'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'greetings_datatable_' . time();
    }
}
