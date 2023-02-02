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
        $char_array = [
            "1", "2", "3", "4", "5", "6", "7", "8", "9", "0",
            "q", "w", "e", "r", "t", "y", "u", "i", "o", "p",
            "a", "s", "d", "f", "g", "h", "j", "k", "l", ";",
            "z", "x", "c", "v", "b", "n", "m", ",", ".", "/",
        ];

        // 1 10 -> 0 9
        // 11 20 -> 10 19
        // 21 30 -> 20 29
        // 31 40 -> 30 39

        $input_text = request()->input_text;
        $setting = explode(",", request()->setting);

        $result = $input_text;
        foreach ($setting as $setting_key => $setting_value) {
            if ($setting_value == "h") {
                $result_h = "";
                foreach (str_split($result) as $key => $val) {
                    $current_key = @array_search($val, $char_array);
                    if ($current_key <= 5) {
                        $h_key = abs(9 - $current_key); // 0 -> 9, 1 -> 8, 2 -> 7
                        $result_h .= @$char_array[$h_key];
                    } else {
                        $h_key = abs($current_key - 9); // 9 -> 0, 8 -> 1, 7 -> 2
                        $result_h .= @$char_array[$h_key];
                    }
                }
                $result = $result_h;
            }

            if ($setting_value == "v") {
                $result_v = "";
                foreach (str_split($result) as $key => $val) {
                    $current_key = @array_search($val, $char_array);

                    // 0 -> 30, 1 -> 31 , 2 -> 32        +30
                    // 10 -> 20, 11 -> 21, 12 -> 22      +10
                    // 20 -> 10, 21 -> 11, 22 -> 12      -10
                    // 30 -> 0, 31 -> 1, 32 -> 2         -30

                    if ($current_key >= 0 && $current_key <= 9) {
                        $h_key = abs($current_key + 30);
                        $result_v .= @$char_array[$h_key];
                    }

                    if ($current_key >= 10 && $current_key <= 19) {
                        $h_key = abs($current_key + 10);
                        $result_v .= @$char_array[$h_key];
                    }

                    if ($current_key >= 20 && $current_key <= 29) {
                        $h_key = abs($current_key - 10);
                        $result_v .= @$char_array[$h_key];
                    }

                    if ($current_key >= 30 && $current_key <= 39) {
                        $h_key = abs($current_key - 10);
                        $result_v .= @$char_array[$h_key];
                    }
                }
                $result = $result_v;
            }

            $int_val = intval($setting_value);
            if ($int_val > 0) {
                $result_right = "";
                foreach (str_split($result) as $key => $val) {
                    $current_key = @array_search($val, $char_array);

                    // 0 -> 5, 1 -> 6
                    if ($current_key >= 0 && $current_key <= 29) {
                        $right_key = abs($current_key + $int_val);
                        $result_right .= @$char_array[$right_key];
                    }

                    if ($current_key >= 30 && $current_key <= 39) {
                        // 38 -> 43(3) , 39 -> 44(4)
                        if ($current_key + $int_val > 39) {
                            $right_key = abs($current_key + $int_val - 40);
                            $result_right .= @$char_array[$right_key];
                        } else {
                            $right_key = abs($current_key + $int_val);
                            $result_right .= @$char_array[$right_key];
                        }
                    }
                }
                $result = $result_right;
            }

            if ($int_val < 0) {
                $result_left = "";
                foreach (str_split($result) as $key => $val) {
                    $current_key = @array_search($val, $char_array);

                    // 0 -> 5, 1 -> 6
                    if ($current_key >= 0 && $current_key <= 29) {
                        $left_key = abs($current_key - $int_val);
                        $result_left .= @$char_array[$left_key];
                    }

                    if ($current_key >= 30 && $current_key <= 39) {
                        // 38 -> 43(3) , 39 -> 44(4)
                        if ($current_key + $int_val > 39) {
                            $left_key = abs($current_key + $int_val - 40);
                            $result_left .= @$char_array[$left_key];
                        } else {
                            $left_key = abs($current_key - $int_val);
                            $result_left .= @$char_array[$left_key];
                        }
                    }
                }
                $result = $result_left;
            }
        }

        return $result;
    }
}
