<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $category = $category->all();
        return view('layouts.admin.Master-data.category.index',compact('category'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.master-data.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Category $category)
    {
        $validator = Validator::make($request->all(),[
            'category_name' =>'required'
        ]);

        if($validator -> fails()){
            return redirect()->route('category.create')->withErrors($validator)->withInput();
        }else{
            $category->category_name = $request->input('category_name');

            $category->save();
            return redirect()->route('category');
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
        $category = Category::find($id);
        return view('layouts.admin.master-data.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'category_name' =>'required'  
        ]);

        if($validator -> fails()){
            return redirect('management-event/category/edit/'.$id)->withErrors($validator)->withInput();
        }else{
            $category = Category::find($id);
            $category-> category_name = $request->input('category_name');

            $category->save();
            return redirect()->route('category');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category')->with('success','Delete this data');
    }
}

