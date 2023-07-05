<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApiConfigurationRequest;
use App\Http\Requests\UpdateApiConfigurationRequest;
use App\Models\ApiConfiguration;

class ApiConfigurationController extends Controller
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
     * @param  \App\Http\Requests\StoreApiConfigurationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApiConfigurationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiConfiguration  $apiConfiguration
     * @return \Illuminate\Http\Response
     */
    public function show(ApiConfiguration $apiConfiguration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiConfiguration  $apiConfiguration
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiConfiguration $apiConfiguration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApiConfigurationRequest  $request
     * @param  \App\Models\ApiConfiguration  $apiConfiguration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApiConfigurationRequest $request, ApiConfiguration $apiConfiguration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiConfiguration  $apiConfiguration
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiConfiguration $apiConfiguration)
    {
        //
    }
}
