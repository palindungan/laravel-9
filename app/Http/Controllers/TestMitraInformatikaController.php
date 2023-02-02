<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMitraInformatikaController extends Controller
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
        return view('test_mitra_informatika.soal1.index');
    }

    public function hasilSoal1()
    {
        return "hasil";
    }
}
