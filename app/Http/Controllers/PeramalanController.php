<?php

namespace App\Http\Controllers;

use App\Models\perhitungan;
use Illuminate\Http\Request;

class PeramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = perhitungan::all();
        $x = perhitungan::sum('x');
        $y = perhitungan::sum('y');
        $z = perhitungan::sum('z');
        $a = perhitungan::sum('a');
        $c = perhitungan::sum('c');
        return view('menu.peramalan',compact('data','x','y','z','a','c'));
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
    public function destroy(string $id)
    {
        //
    }
}
