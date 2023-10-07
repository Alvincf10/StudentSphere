<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Organizer $organizer)
    {
         $organizer = $organizer->all();
         return view('layouts.admin.master-data.organizer.index',compact('organizer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.master-data.organizer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Organizer $organizer)
    {
        $validator = Validator::make($request->all(),[
            'organizer_name' =>'required'
        ]);

        if($validator -> fails()){
            return redirect()->route('organizer.create')->withErrors($validator)->withInput();
        }else{
            $organizer->name_organizer = $request->input('organizer_name');

            $organizer->save();
            return redirect()->route('organizer');
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
        $organizer = Organizer::find($id);
        return view('layouts.admin.master-data.organizer.edit',compact('organizer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Organizer $organizer)
    {
        $validator = Validator::make($request->all(),[
            'name_organizer' =>'required'  
        ]);

        if($validator -> fails()){
            return redirect('management-event/organizer/edit/'.$id)->withErrors($validator)->withInput();
        }else{
            $organizer = organizer::find($id);
            $organizer-> name_organizer = $request->input('name_organizer');

            $organizer->save();
            return redirect()->route('organizer');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizer = organizer::findOrFail($id);
        $organizer->delete();
        return redirect()->route('organizer')->with('success','Delete this data');
    }
}
