<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Products.index', ['products' => Products::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Products $products, Request $request)
    {
        $products->description = $request->description;
        $products->amount = $request->amount;
        $products->value = $request->value;
        $products->status = $request->status;

        $products->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('Products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $product->update([
            'description' => $request->description,
            'amount' => $request->amount,
            'value' => $request->value,
            'status' => $request->status
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
