<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\Greeting;
use App\Models\Guest;
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
    public function index($code = null)
    {
        if (request()->action == 'greeting-get-data') {
            $greetings = Greeting::orderBy('created_at', 'desc')->simplePaginate(5);

            return response()->json([
                'success' => true,
                'message' => '',
                'data' => $greetings,
            ], 200);
        }

        $guest = Guest::where('code', $code)->first();
        if (empty($guest)) {
            return view('page_not_found');
        }

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
            ->with('guest', $guest)
            ->with('bride', $bride)
            ->with('groom', $groom)
            ->with('wedding', $wedding)
            ->with('setting', $setting);
    }

    public function greetingStore(Request $request)
    {
        $guest = Guest::where('code', $request->code)->first();
        if (empty($guest)) {
            return response()->json([
                'success' => false,
                'message' => '',
            ], 404);
        }

        $greeting = Greeting::create([
            'guest_id' => $guest->id,
            'greet' => $request->greet,
        ]);

        return response()->json([
            'success' => true,
            'message' => '',
            'data' => $greeting,
        ], 200);
    }

    public function backup()
    {
        return view('_backup.home.index');
    }

    public function pageNotFound()
    {
        return view('page_not_found');
    }
}
