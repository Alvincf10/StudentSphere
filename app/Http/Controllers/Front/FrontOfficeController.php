<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    public function index(){
        $program = Program::with('organizer','location','category')->get();
        return view('layouts.front.home', compact('program'));
    }

    public function allEvent(){
        return view('layouts.front.event.all');
    }

    public function detailEvent(){
        return view('layouts.front.event.detail-event');
    }
}
