<?php

namespace App\Http\Controllers\Venue;

use App\Models\Venue;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PreOrder;

class VenueController extends Controller
{
    // constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index
    public function index(Request $request)
    {

        $search = $request->search;
        $venues = DB::table('venues')
            ->leftJoin('review', 'venues.id', '=', 'review.venue_id')
            ->where('venues.name', 'like', "%" . $search . "%")
            ->select('venues.*', DB::raw('AVG(review.rating) as rating'))
            ->groupBy('venues.id', 'venues.name', 'venues.address', 'venues.description', 'venues.image', 'venues.sport_id', 'venues.description', 'venues.detail', 'venues.detail', 'venues.price', 'venues.created_at', 'venues.updated_at')
            ->get();
        $data = [
            'venues' => $venues,
            'search' => $search
        ];
        return view('venue', compact('data'));
    }

    public function detail(Request $request){
        $id = $request->id;
        $venue = venue::find($id);

        $reviews = Review::where('venue_id', $id)->get();

        $facility = DB::table('f_venues')->leftJoin('facilities', 'f_venues.facility_id', '=', 'facilities.id')->where('venue_id', $id)->get();
        $data = [
            'venue' => $venue,
            'reviews' => $reviews,
            'facility' => $facility
        ];

        return view('detail-venue', compact('data'));
    }

    public function jadwal(Request $request, $id){
        $check = PreOrder::where('user_id', auth()->user()->id)->get();

        if ($check->count() != 0){
            return redirect()->route('detail-order')->with('status', 'Harap Selesaikan Pesanan Sebelumnya');
        }
        return view('jadwal', compact('request', 'id'));
    }

    public function time(Request $request, $id){
        $venue = venue::find($id);
        return view('waktu', compact('request', 'id', 'venue'));
    }
}
