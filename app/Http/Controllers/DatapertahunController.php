<?php

namespace App\Http\Controllers;

use App\Models\data_siswa;
use Illuminate\Http\Request;

class DatapertahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = data_siswa::orderBy('tahun', 'asc')->get();
        return view('datapertahun.datasiswa',compact('data'));
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
    public function destroy($id)
    {
        $siswa = data_siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('datapertahun.index');
    }
}
