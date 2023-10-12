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
    public function index(AboutUs $abouts, string $id=null)
    {

            $abouts = AboutUs::find($id);
            return view('layouts.admin.master-data.aboutus.index',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function CreateOrEdit(Request $request, AboutUs $abouts, string $id=null)
{
    $validator = Validator::make($request->all(), [
        'description' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect()->route('aboutus', ['id' => $id])->withErrors($validator)->withInput();
    }
    if($id == null){
        $abouts->description = $request->input('description');
        $abouts->save();

        $newlyCreatedId = $abouts->id;
        return redirect()->route('aboutus.edit',['id'=>$newlyCreatedId])->with('success');
    }else{
        $abouts=AboutUs::find($id);
        $abouts->description = $request->input('description');
        $abouts->save();

    return redirect()->route('aboutus.edit',['id'=>$id])->with('success');

    }

}


}
