<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Location;
use App\Models\Organizer;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Program $program)
    {
        $program = Program::with('organizer','location','category')->get();
        return  view('layouts.admin.Master-data.Event.index',compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Organizer $organizer, Program  $program, Location $location, Category $category)
    {
        $organizer = $organizer->all();
        $location = $location->all();
        $category = $category->all();
        return view('layouts.admin.Master-data.Event.add',compact('organizer','location','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Program $program)
    {
        $validator = Validator::make($request->all(),[
            'event_name'=>'required',
            'description'=>'required',
            'startDate'=>'required',
            'endDate'=>'required',
            'qouta'=>'required',
            'organizer'=>'required',
            'location'=>'required',
            'category'=>'required',
        ]);

        if($validator->fails()){
            return redirect()->route('event.create')->withErrors($validator)->withInput();
        }else{
            $program ->program_name =$request->input('event_name');
            $program ->description =$request->input('description');
            $program ->start_date_program =$request->input('startDate');
            $program ->end_date_program =$request->input('endDate');
            $program ->qouta =$request->input('qouta');
            $program ->id_organizer =$request->input('organizer');
            $program ->id_location =$request->input('location');
            $program ->id_category =$request->input('category');

            $program->save();
            return redirect()->route('event');
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
    public function edit(string $id, Organizer $organizer, Location $location, Category $category)
    {
        $organizer = $organizer->all();
        $location = $location->all();
        $category = $category->all();

        $program = Program::find($id);
        return view('layouts.admin.Master-data.Event.edit',compact('program','organizer','location','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Program $program)
    {
        $validator = Validator::make($request->all(),[
            'event_name'=>'required',
            'description'=>'required',
            'startDate'=>'required',
            'endDate'=>'required',
            'qouta'=>'required',
            'organizer'=>'required',
            'location'=>'required',
            'category'=>'required',
        ]);

        if($validator->fails()){
            return redirect()->route('event.create')->withErrors($validator)->withInput();
        }else{
            $program = Program::find($id);

            $program ->program_name =$request->input('event_name');
            $program ->description =$request->input('description');
            $program ->start_date_program =$request->input('startDate');
            $program ->end_date_program =$request->input('endDate');
            $program ->qouta =$request->input('qouta');
            $program ->id_organizer =$request->input('organizer');
            $program ->id_location =$request->input('location');
            $program ->id_category =$request->input('category');

            $program->save();
            return redirect()->route('event');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);

        $program->delete();

        return redirect()->route('event')->with('success','Delete This Data');
    }
}
