<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        return view('tampil', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        return view('tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namabuku'=>'required',
            'deskripsi'=>'required',
            'pencipta'=>'required',
            'tglterbit'=>'required|integer',
        ]);

        Buku::create($validator);
        return redirect('buku');
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
        $data = Buku::find($id);
        return view('edit', compact('data'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'namabuku'=>'required',
            'deskripsi'=>'required',
            'pencipta'=>'required',
            'tglterbit'=>'required|integer',
        ]);

        Buku::find($id)->update($validator);
        return redirect('buku');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::find($id)->delete();
        return redirect('buku');
        //
    }
}
