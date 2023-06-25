<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Cities.index', ['city' => Cities::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Cities $cities, Request $request)
    {
        $cities->cities = $request->cities;
        $cities->description = $request->description;

        $cities->save();

        return redirect()->route('cities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cities $city)
    {
        return view('Cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cities $city)
    {
        $city->update([
            'cities' => $request->cities,
            'description' => $request->description

        ]);

        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cities $city)
    {
        $city->delete();

        return redirect()->route('cities.index');
    }
}
