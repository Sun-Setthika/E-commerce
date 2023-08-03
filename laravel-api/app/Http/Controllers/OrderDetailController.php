<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
         return OrderDetail::all();
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
    // public function store(Request $request)
    // {
        
    //         return OrderDetail::create([
    //             'order_id' => $request->order_id,
    //             'product_id' => $request->product_id,
    //             'color_id' => $request->color_id,
    //             'product_size_id' => $request->product_size_id,
    //             'quantity' => $request->quantity,
    //             'subtotal' => $request->subtotal,
    //     ]);
        
    // }

    // public function store(Request $request)
    // {
    //     $order_detail = new OrderDetail();
    //     $order_detail->order_id = $request->order_id;
    //     $order_detail->product_id =  $request->product_id;
    //     $order_detail->product_size_id =  $request->product_size_id;
    //     $order_detail->color_id =  $request->color_id;
    //     $order_detail->quantity =  $request->quantity;
    //     $order_detail->subtotal=  $request->subtotal;

    //     $order_detail->save();
    // }

    public function store(Request $request)
{
    // Assuming you want to store the array of objects in a database table
    // You can loop through the array and create records one by one
    $data = $request->all();

    foreach ($data as $item) {
        OrderDetail::create([
            'product_id' => $item['product_id'],
            'color_id' => $item['color_id'],
            'product_size_id' => $item['product_size_id'],
            'quantity' => $item['quantity'],
            'subtotal' => $item['subtotal'],
        ]);
    }

    // Optionally, you can return a response back to the frontend if needed
    return response()->json(['message' => 'Data saved successfully'], 201);
}

    




    
    
    // public function show(string $id)
    // {
    //     return Cart::find($id);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
    
