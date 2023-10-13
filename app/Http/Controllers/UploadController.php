<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Upload::all();
        return view('upload/tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'image'=>'required|max:2000|mimes:png,jpg',
        ]);

        $validator['image'] = $request->file('image')->store('img');
        // dd($file);

        Upload::create($validator);

        // !!! Message belum bisa ditampilkan
        return redirect('upload')->with('success', 'Data berhasil diupload');

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
        //
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
        Upload::find($id)->delete();
        return redirect('upload')->with('warning', 'Data berhasil dihapus');
    }
}
