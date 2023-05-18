<?php

namespace Modules\Backend\DataTables;

use App\Models\PhotoGallery;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PhotoGalleryDataTable extends DataTable
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

        return $dataTable->editColumn('photo', function($row) {
            return '<img src="' . $row->photo_thumbnail . '" alt="photo" class="img-thumbnail img-thumbnail-photo" style="max-height: 200px;">';
        })
        ->addColumn('action', 'backend::photo_galleries.datatables_actions')
        ->rawColumns(['photo', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PhotoGallery $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PhotoGallery $model)
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
                'order'     => [[0, 'asc']],
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
            ['name' => 'sort', 'title' => 'No Urut', 'data' => 'sort'],
            ['name' => 'photo', 'title' => 'Foto', 'data' => 'photo', 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'photo_galleries_datatable_' . time();
    }
}
