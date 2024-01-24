<?php

namespace App\Http\Controllers;

use App\Models\konsultan;
use Illuminate\Http\Request;

class KonsultanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsultan = konsultan::all();
        return view('konsultan', ['konsultan'=>$konsultan]);
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
