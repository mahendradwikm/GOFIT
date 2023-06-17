<?php

namespace App\Http\Controllers\Admin\Venue;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Facilities;
use App\Models\Sport;
use App\Models\Venue;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index(Request $request)
    {
        $search = $request->search;

        if (isset($search)){
            $venues = DB::table('venues')
                ->leftJoin('review', 'venues.id', '=', 'review.venue_id')
                ->where('venues.name', 'like', "%" . $search . "%")
                ->select('venues.*', DB::raw('AVG(review.rating) as rating'))
                ->groupBy('venues.id', 'venues.name', 'venues.address', 'venues.description', 'venues.image', 'venues.sport_id', 'venues.description', 'venues.detail', 'venues.detail', 'venues.price', 'venues.created_at', 'venues.updated_at')
                ->get();
        } else {
            $venues = DB::table('venues')
                // Review id can be null
                ->leftJoin('review', 'venues.id', '=', 'review.venue_id')
                ->select('venues.*', DB::raw('AVG(review.rating) as rating'))
                ->groupBy('venues.id', 'venues.name', 'venues.address', 'venues.description', 'venues.image', 'venues.sport_id', 'venues.description', 'venues.detail', 'venues.detail', 'venues.price', 'venues.created_at', 'venues.updated_at')
                ->get();

        }

        $data = [
            'venues' => $venues,
            'search' => $search
        ];

        return view('admin.venue', compact('data'));
    }

    public function detail(Request $request){
        $id = $request->id;

        $venue = DB::table('venues')->where('id', '=', $id)->get()->first();

        $facilities = DB::table('f_venues')
            ->join('facilities', 'f_venues.facility_id', '=', 'facilities.id')
            ->where('f_venues.venue_id', '=', $id)
            ->select('facilities.*')
            ->get();

        $reviews = DB::table('review')
            ->join('users', 'review.user_id', '=', 'users.id')
            ->where('review.venue_id', '=', $id)
            ->select('review.*', 'users.name')
            ->get();

        $data = [
            'venues' => $venue,
            'reviews' => $reviews,
            'facilities' => $facilities
        ];

        return view('admin.detail-venue', compact('data'));
    }

    public function edit(Request $request){
        $id = $request->id;

        $venue= Venue::find($id);
        $sports = Sport::all();
        $facilities = Facilities::all();

        return view('admin.edit-venue', compact('venue', 'sports', 'facilities'));
    }

    public function update(Request $request){
        $id = $request->id;

        try {
            $venue = Venue::find($id);
            $venue->name = $request->name;
            $venue->address = $request->address;
            $venue->sport_id = $request->sport_id;
            $venue->price = $request->price;
            $venue->detail = $request->detail;

            $venue->save();

            // Update facilities
            $facilities = $request->facilities;

            // Drop all facilities
            DB::table('f_venues')->where('venue_id', '=', $id)->delete();
            foreach ($facilities as $facility) {
                DB::table('f_venues')->insert([
                    'venue_id' => $id,
                    'facility_id' => $facility
                ]);
            }
            return redirect('/admin/venue/'.$id)->with('success', 'Venue updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('error', 'Failed to update venue', $th);
        }

    }

    public function add (){
        
        $sports = Sport::all();
        $facilities = Facilities::all();
        return view('admin.add-venue', compact('sports', 'facilities'));
    }

    public function venueStore(Request $request){

        // Store Image
        $images = Storage::disk('public')->put('images', $request->file('image'));
        $imageName = basename($images);


        $venue = [
            'name' => $request->name,
            'address' => $request->address,
            'sport_id' => $request->sport_id,
            'description' => $request->description,
            'price' => $request->price,
            'detail' => $request->detail,
            'image' => $imageName
        ];

        $venue = Venue::create($venue);

        // Store facilities
        $facilities = $request->facilities;

        foreach ($facilities as $facility) {
            DB::table('f_venues')->insert([
                'venue_id' => $venue->id,
                'facility_id' => $facility
            ]);
        }

        return redirect('/admin/venue')->with('success', 'Venue added successfully');
    }
}