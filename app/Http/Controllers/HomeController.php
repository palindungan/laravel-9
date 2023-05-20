<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Wedding;
use App\Repositories\WeddingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
    public function index()
    {
        $settings = Setting::all();
        $setting = [
            "1_1" => $settings->where('code', '1_1')->first(),

            "2_1" => $settings->where('code', '2_1')->first(),
            "2_2" => $settings->where('code', '2_2')->first(),

            "3_1" => $settings->where('code', '3_1')->first(),
            "3_2" => $settings->where('code', '3_2')->first(),

            "4_1" => $settings->where('code', '4_1')->first(),
            "4_2" => $settings->where('code', '4_2')->first(),
            "4_3" => $settings->where('code', '4_3')->first(),
            "4_4" => $settings->where('code', '4_4')->first(),

            "5_1" => $settings->where('code', '5_1')->first(),
            "5_2" => $settings->where('code', '5_2')->first(),
            "5_3" => $settings->where('code', '5_3')->first(),

            "6_1" => $settings->where('code', '6_1')->first(),
            "6_2" => $settings->where('code', '6_2')->first(),
            "6_3" => $settings->where('code', '6_3')->first(),
            "6_4" => $settings->where('code', '6_4')->first(),
        ];

        $wedding = WeddingRepository::getData()->select(
            'weddings.*',
            DB::raw('bride.name as bride_name'),
            DB::raw('bride.name_short as bride_name_short'),

            DB::raw('groom.name as groom_name'),
            DB::raw('groom.name_short as groom_name_short'),

            DB::raw('events.name as event_name'),
            DB::raw('events.date_start as event_date_start'),
            DB::raw('events.time_start as event_time_start'),
        )->first();

        return view('home.index')
            ->with('setting', $setting)
            ->with('wedding', $wedding);
    }

    public function backup()
    {
        return view('_backup.home.index');
    }
}
