<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('customers.index', ['custom' => Customers::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Customers $custom ,Request $request)
    {
        $custom->name = $request->name;
        $custom->lastName = $request->lastname;
        $custom->phone = $request->phone;
        $custom->address = $request->address;
        $custom->birth_date = $request->birth_date;

        $custom->save();

        //$custom->create([
            //$custom->name => $request->name,
            //$custom->lastName => $request->lastname,
            //$custom->phone => $request->phone,
            //$custom->address => $request->address,
            //$custom->birth_date => $request->birth_date
        //]);

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customers $customers)
    {
        //
    }
}
