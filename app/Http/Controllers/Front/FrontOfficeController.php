<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Carbon\Carbon;

class FrontOfficeController extends Controller
{

    public function index(){
        $program = Program::with('organizer','location','category')->get();

        $now = Carbon::now();
        $programSold = Program::where('end_date_program','<=',$now)->get();
        $programAvailable = Program::where('end_date_program','>=',$now)->orderBy('end_date_program','desc')->get();
        return view('layouts.front.home', compact('program','programSold','programAvailable'));
    }

    public function allEvent(){
        return view('layouts.front.event.all-event');
    }

    public function detailEvent(string $id){
        $mapbox = env('MAPBOX_TOKEN');
        $programDetail = Program::find($id);
        return view('layouts.front.event.detail-event',compact('programDetail','mapbox'));
    }

    public function purchase(){
        return view('layouts.front.event.purchase');
    }


}
