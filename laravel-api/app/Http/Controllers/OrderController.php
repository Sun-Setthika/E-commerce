<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function createOrder(Request $request)
    //     {
    //         // Your logic to get the products and other order information from the request

    //         // Generate a unique order number
    //         $orderNumber = 'ORD-' . Str::random(8);

    //         // Create the order in the 'orders' table with the unique order number
    //         $order = Order::create([
    //             'order_number' => $orderNumber,
    //             'subtotal' => $subtotal,
    //             'total' => $total,
    //             'tax' => $tax,
               
    //         ]);

    //         // Insert order details for each product
    //         foreach ($products as $product) {
    //             OrderDetail::create([
    //                 'order_number' => $orderNumber, // Use the same order number
    //                 'product_id' => $product->id,
    //                 'quantity' => $product->quantity,
    //                 'total' => $product->total,
    //                 // ... other order detail attributes ...
    //             ]);
    //         }

            
    //     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            return Order::create([
                'subtotal' => $request->subtotal,
                'total' => $request->total,
                'tax' => $request->tax,
                'user_id' => $request->user_id,
                'customer_info_id' => $request->customer_info_id,
                'shipping_id' => $request->shipping_id,
                'discount_id'=> $request->discount_id,
            ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
