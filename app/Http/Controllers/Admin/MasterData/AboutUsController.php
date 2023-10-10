<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Cast\String_;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AboutUs $abouts)
    {
        $abouts = $abouts->all();
        return view('layouts.admin.master-data.aboutus.index',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, AboutUs $abouts,String $id)
    {   
        if(empty($abouts)){
            $validator = Validator::make($request->all(),[
                'description' =>'required'
            ]);
    
            if($validator -> fails()){
                return redirect()->route('aboutus')->withErrors($validator)->withInput();
            }else{
                $abouts->description = $request->input('description');
    
                $abouts->save();
                return redirect()->route('description');
            }
        }else{
            $validator = Validator::make($request->all(),[
                'description' =>'required'
            ]);
    
            if($validator -> fails()){
                return redirect()->route('aboutus')->withErrors($validator)->withInput();
            }else{
                $abouts = AboutUs::find($id);
                $abouts->description = $request->input('description');
    
                $abouts->save();
                return redirect()->route('aboutus');
        }
        }
    
        // return view('layouts.admin.master-data.aboutus');
    }
}