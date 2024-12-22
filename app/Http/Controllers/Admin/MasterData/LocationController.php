<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Location $location)
    {
        $location = $location->all();
        return view('layouts.admin.Master-data.location.index',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.Master-data.Location.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Location $location)
    {
            $validator = Validator::make($request->all(),[
                'location_name' =>'required',
                'latitude' =>'required',
                'longitude' =>'required'
            ]);

            if($validator -> fails()){
                return redirect()->route('location.create')->withErrors($validator)->withInput();
            }else{
                $location->location_name = $request->input('location_name');
                $location->latitude = $request->input('latitude');
                $location->longitude = $request->input('longitude');

                $location->save();
                return redirect()->route('location');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::find($id);

        return view('layouts.admin.Master-data.Location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Location $location)
    {
        $validator = Validator::make($request->all(),[
            'location_name' =>'required',
            'latitude' =>'required',
            'longitude' =>'required'
        ]);

        if($validator -> fails()){
            return redirect('management-event/location/edit/'.$id)->withErrors($validator)->withInput();
        }else{
            $location = Location::find($id);
            $location->location_name = $request->input('location_name');
            $location->latitude = $request->input('latitude');
            $location->longitude = $request->input('longitude');

            $location->save();
            return redirect()->route('location');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('location')->with('success','Delete this data');
    }
}
