<?php

namespace App\Http\Controllers\Pizza;

use App\Http\Resources\PizzaResource;
use App\Pizza;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PizzaToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return PizzaResource
     */
    public function index()
    {
        return new PizzaResource(Pizza::with('toppings')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PizzaResource
     */
    public function store(Request $request)
    {
        return new PizzaResource(Pizza::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return PizzaResource
     */
    public function show($id)
    {
        return new PizzaResource(Pizza::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return PizzaResource
     */
    public function update(Request $request, $id)
    {
        return new PizzaResource(tap(Pizza::findOrFail($id))->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Pizza::findOrFail($id)->delete();
    }
}
