<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return response([
        //     'message'=>'Data berhasil ditemukan',
        //     'data'=>Buku::with('')
        // ])
        $data = Buku::all();
        return response([
            'code'=> 200,
            'response'=> [
                'message'=> 'success',
                'data'=> $data
            ]
        ], 200);

        // [
        //     'message'=> 'Data berhasil ditemukan',
        //     'data'=>$data
        // ]
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

        return response([
            'message'=>'Data berhasil diinput',
            'data'=> Buku::create($validator)
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Buku::find($id);
        return response([
            'code'=> 200,
            'response'=> [
                'message'=> 'success',
                'data'=> $data
            ]
        ], 200);
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

        $data=Buku::find($id);
        $data->update($validator);

        return response([
            'message'=>'Data berhasil diubah',
            'data'=> $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
