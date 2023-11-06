<?php

namespace App\Http\Controllers;

use App\Models\datasiswa;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = datasiswa::paginate(10);
        return view('menu.datasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.tambahdatasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        $this->validate($request, [
            'jurusan' => 'required',
            'tahun' => 'required',
            'jumlahsiswa' => 'required|numeric'
        ], $messages);

        $post = new datasiswa();
        $post->jurusan = $request->input('jurusan');
        $post->tahun = $request->input('tahun');
        $post->jumlahsiswa = $request->input('jumlahsiswa');
        $post->save();

        return redirect()->route('datasiswa.index')->with('success', 'Data berhasil di tambahkan !');
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
        //
    }
}
