<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Location;
use App\Models\Organizer;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request)
    {
        //
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
        return view('layouts.admin.Master-data.Event.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
