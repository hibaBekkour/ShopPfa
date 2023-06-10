<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'address' => 'required|string',
        ]);

        // Create a new location record
        $location = new Location();
        $location->address = $request->input('address');
        $location->save();

        // Redirect or return a response
        return redirect()->route('payment')->with('success', 'Location saved successfully');
    }
}
