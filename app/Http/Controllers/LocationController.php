<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return view("location.index", compact("locations"));
    }

    public function store(Request $request) 
    {
        Location::create([
            "name"=> $request->input("name"),
        ]);

        return redirect()
            ->route('location-manage')
            ->with('save_success', 'Location successfully added.');
    }

    public function delete(Request $request)
    {
        Location::findOrFail($request->input('location_id'))->delete();

        return redirect()
            ->route('location-manage')
            ->with('delete_success', 'Location successfully deleted.');
    }
}
