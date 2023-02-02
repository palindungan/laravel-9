<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestExampleController extends Controller
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
    public function soal1($x = 6, $y = 4)
    {
        for ($i = 1; $i <= $y; $i++) {
            print("Y: $i | ");
            for ($j = 1; $j <= $x; $j++) {
                print("X: $j");
            }
            print("<br>");
        }

        print("<hr>");

        for ($i = $y; $i > 0; $i--) {
            print("Y: $i | ");
            for ($j = 1; $j <= $i; $j++) {
                print("X: $j");
            }
            print("<br>");
        }

        print("<hr>");

        for ($i = $x; $i > ($x - $y); $i--) {
            // print("Y: $i | ");
            for ($j = 1; $j <= $i; $j++) {
                $show = "X";
                if ($j % 2 == 0) {
                    $show = "_";
                }
                print("$show");
                // print("X: $j");
            }
            print("<br>");
        }
    }
}
