<?php

namespace App\Http\Controllers;

use App\DataTables\AdminDataTable;
use App\Exports\AdminsExport;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Controllers\AppBaseController;
use App\Imports\AdminsImport;
use App\Repositories\AdminRepository;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends AppBaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function soal1()
    {
        $number_before = 0;
        $number_current = 1;

        print("$number_before $number_current");

        for ($i = 0; $i < 12; $i++) {
            $output = $number_current + $number_before;
            print(" $output");

            $number_before = $number_current;
            $number_current = $output;
        }
    }
}
