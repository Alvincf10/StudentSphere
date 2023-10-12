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
    public function CreateOrEdit(Request $request, $id = null, AboutUs $abouts)
{
    // $validator = Validator::make($request->all(), [
    //     'description' => 'required'
    // ]);

    // if ($validator->fails()) {
    //     return redirect()->route('aboutus', ['id' => $id])->withErrors($validator)->withInput();
    // }
    if ($id == null) {
        // Jika $id tidak disediakan, buat data baru
        $abouts->about_us = $request->input('description');
        dd($abouts);
        $abouts->save();
        $message = 'Data berhasil dibuat';
    } else {
        // Jika $id disediakan, cek apakah data dengan $id ada di database
        $about = AboutUs::find($id);

        if (!$about) {
            // Jika data tidak ditemukan, kembali ke halaman dengan pesan error
            return redirect()->route('aboutus')->with('error', 'Data tidak ditemukan');
        }

        // Jika data ditemukan, edit data yang ada
        $message = 'Data berhasil diubah';
    }

    $about->description = $request->input('description');
    $about->save();

    return redirect()->route('aboutus')->with('success', $message);
}

    
}