<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHookRequestRequest;
use App\Http\Requests\UpdateHookRequestRequest;
use App\Models\HookRequest;

class HookRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreHookRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHookRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HookRequest  $hookRequest
     * @return \Illuminate\Http\Response
     */
    public function show(HookRequest $hookRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HookRequest  $hookRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(HookRequest $hookRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHookRequestRequest  $request
     * @param  \App\Models\HookRequest  $hookRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHookRequestRequest $request, HookRequest $hookRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HookRequest  $hookRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(HookRequest $hookRequest)
    {
        //
    }
}
