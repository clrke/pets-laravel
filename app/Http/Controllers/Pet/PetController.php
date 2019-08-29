<?php

namespace App\Http\Controllers\Pet;

use App\Http\Resources\PetResource;
use App\Pet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return PetResource
     */
    public function index()
    {
        return new PetResource(Pet::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PetResource
     */
    public function store(Request $request)
    {
        return new PetResource(Pet::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return PetResource
     */
    public function show($id)
    {
        return new PetResource(Pet::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return PetResource
     */
    public function update(Request $request, $id)
    {
        return new PetResource(tap(Pet::findOrFail($id))->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Pet::findOrFail($id)->delete();
    }
}
