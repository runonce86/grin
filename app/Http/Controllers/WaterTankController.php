<?php

namespace App\Http\Controllers;

use App\Models\WaterTank;
use Illuminate\Http\Request;

class WaterTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WaterTank::get();
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
     * @param  \App\Models\WaterTank  $waterTank
     * @return \Illuminate\Http\Response
     */
    public function show(WaterTank $waterTank)
    {
        return $waterTank;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaterTank  $waterTank
     * @return \Illuminate\Http\Response
     */
    public function edit(WaterTank $waterTank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WaterTank  $waterTank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WaterTank $waterTank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WaterTank  $waterTank
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaterTank $waterTank)
    {
        //
    }
}
