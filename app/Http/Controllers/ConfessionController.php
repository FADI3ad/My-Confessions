<?php

namespace App\Http\Controllers;

use App\Models\Confession;
use Illuminate\Http\Request;

class ConfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       return view('confession.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('confession.create');
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
    public function show(Confession $confession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Confession $confession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Confession $confession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Confession $confession)
    {
        //
    }
}
