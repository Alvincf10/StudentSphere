<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    public function index(){
        return view('layouts.front.home');
    }

    public function allEvent(){
        return view('layouts.front.event.all');
    }

    public function detailEvent(){
        return view('layouts.front.event.detail-event');
    }
}
