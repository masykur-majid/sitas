<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //get all the data from table through the model
        $location = Location::orderBy('id','desc')->paginate(20);
        
        //return as the view data
        return view('location.index',compact('location')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lokasi_name' => 'required|unique:locations,location_name'
        ]);

        Location::create($validatedData);

        return redirect()->route('location.index')->with('success', 'New location added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $validatedData = $request->validate([
            'location_name' => 'required|unique:locations,location_name'
        ]);

        $location->update($validatedData);

        return redirect()->route('location.index')->with('success', 'update berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('location.index')->with('success', "berhasil menghapus");
    }
}
