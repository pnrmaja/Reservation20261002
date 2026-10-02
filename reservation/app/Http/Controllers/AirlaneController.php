<?php

namespace App\Http\Controllers;

use App\Models\Airlane;
use App\Http\Requests\StoreAirlaneRequest;
use App\Http\Requests\UpdateAirlaneRequest;

class AirlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Airlane::all();
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
    public function store(StoreAirlaneRequest $request)
    {
        $record = new Airlane();
        $record->fill($request->all())->save();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Airlane $airlane)
    {
        return Airlane::find($airlane);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airlane $airlane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirlaneRequest $request, Airlane $airlane)
    {
        $airlane->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airlane $airlane)
    {
        //
    }
}
