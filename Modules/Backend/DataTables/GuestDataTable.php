<?php

namespace Modules\Backend\DataTables;

use App\Models\Guest;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class GuestDataTable extends DataTable
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
            ->editColumn('code', function($row) {
                return  '<a target="_blank" href="'. url('') . '/' . $row->code .'">'. url('') . '/' . $row->code .'</a>';
            })
            ->addColumn('action', 'backend::guests.datatables_actions')
            ->rawColumns(['code', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Guest $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Guest $model)
    {
        return $model->newQuery();
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
                'order'     => [[1, 'asc']],
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
            ['name' => 'code', 'title' => 'Kode', 'data' => 'code'],
            ['name' => 'name', 'title' => 'Nama', 'data' => 'name'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'guests_datatable_' . time();
    }
}
