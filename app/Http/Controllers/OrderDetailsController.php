<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ordersDetails.index', ['orderdetail' => OrderDetails::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordersDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderDetails $OrderDetails, Request $request)
    {
        $OrderDetails->description = $request->description;
        $OrderDetails->order_id = $request->order_id;
        $OrderDetails->product_id = $request->product_id;

        $OrderDetails->save();

        return redirect()->route('orderdetails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetails $OrderDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetails $orderdetail)
    {
        return view('ordersDetails.edit', compact('orderdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderDetails $orderdetail)
    {
        $orderdetail->update([
            'description' => $request->description,
            'order_id' => $request->order_id,
            'product_id' => $request->product_id
        ]);

        return redirect()->route('orderdetails.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetails $orderdetail)
    {
        $orderdetail->delete();

        return redirect()->route('orderdetails.index');
    }
}
