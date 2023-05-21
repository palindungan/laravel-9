<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\PhotoGallery;
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
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->code] =  $value;
        }

        $wedding = WeddingRepository::getData()->select(
            'weddings.*',
            DB::raw('events.name as event_name'),
            DB::raw('events.date_start as event_date_start'),
            DB::raw('events.time_start as event_time_start'),
        )->first();

        $bride = null;
        if ($wedding->bride_id) {
            $bride = Admin::find($wedding->bride_id);
        }

        $groom = null;
        if ($wedding->groom_id) {
            $groom = Admin::find($wedding->groom_id);
        }

        $events = Event::all();

        $photo_galleries = PhotoGallery::orderBy('sort', 'asc')->get();

        return view('home.index',
                compact(
                    "events",
                    "photo_galleries",
                )
            )
            ->with('bride', $bride)
            ->with('groom', $groom)
            ->with('wedding', $wedding)
            ->with('setting', $setting);
    }

    public function backup()
    {
        return view('_backup.home.index');
    }
}
