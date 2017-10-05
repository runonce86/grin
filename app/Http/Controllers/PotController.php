<?php

namespace App\Http\Controllers;

use App\Models\Pot;
use Illuminate\Http\Request;

class PotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pot::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function show(Pot $pot)
    {
        return $pot;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pot $pot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pot $pot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pot $pot)
    {
        //
    }
}
