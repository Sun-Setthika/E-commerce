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
    public function store(Request $request)
    {
        
            return OrderDetail::create([
                'order_id' => $request->order_id,
                'product_id' => $request->product_id,
                'color_id' => $request->color_id,
                'product_size_id' => $request->product_size_id,
                'quantity' => $request->quantity,
                'subtotal' => $request->subtotal,
            ]);
        
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
    
