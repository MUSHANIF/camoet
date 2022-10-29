jns<?php

namespace App\Http\Controllers;

use App\Models\motor;
use App\Http\Requests\StoremotorRequest;
use App\Http\Requests\UpdatemotorRequest;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoremotorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremotorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function show(motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function edit(motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemotorRequest  $request
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemotorRequest $request, motor $motor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(motor $motor)
    {
        //
    }
}
