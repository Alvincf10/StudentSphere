<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $program = Program::with('organizer','location','category')->get();
        return view('layouts.front.event.all-event',compact('program'));
    }

    public function filterEvent(Request $request){
        $dateOption = $request->input('date-option');
        $priceOption = $request->input('price-option');
        $categoryOption = $request->input('category-option');

        $program = Program::query();

        if($dateOption === 'this-month'){
            $program->whereYear('date_program', Carbon::now()->year)->whereMonth('date_program',Carbon::now()->month);
        }elseif($dateOption === 'next-month'){
            $program->whereYear('date_program', Carbon::now()->addMonth()->year)
            ->whereMonth('date_program', Carbon::now()->addMonth()->month);
        }

        if ($priceOption === 'free') {
            $program->where('price', 0);
        } elseif ($priceOption === 'paid') {
            $program->where('price', '>', 0);
        }

        if($categoryOption){
            $program->where('id_category', $categoryOption);
        }

        $filteredProgram = $program->get();

        return view('layouts.front.event.all-event',compact('filteredProgram'));
    }

    public function detailEvent(string $id){
        $mapbox = env('MAPBOX_TOKEN');
        $programDetail = Program::find($id);
        return view('layouts.front.event.detail-event',compact('programDetail','mapbox'));
    }

    public function purchase(string $id){
        $eventTicket = Program::find($id);
        return view('layouts.front.event.purchase',compact('eventTicket'));
    }


}
