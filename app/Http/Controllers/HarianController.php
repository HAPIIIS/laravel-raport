<?php

namespace App\Http\Controllers;

use App\Models\Harian;
use App\Http\Requests\StoreHarianRequest;
use App\Http\Requests\UpdateHarianRequest;

class HarianController extends Controller
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
     * @param  \App\Http\Requests\StoreHarianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHarianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function show(Harian $harian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function edit(Harian $harian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHarianRequest  $request
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHarianRequest $request, Harian $harian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harian $harian)
    {
        //
    }
}
