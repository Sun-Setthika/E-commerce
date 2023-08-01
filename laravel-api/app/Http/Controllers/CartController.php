<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cart::with('product')->get();
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
        try {
            return Cart::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'color_id' => $request->color_id,
                'product_size_id' => $request->product_size_id,
                'quantity' => $request->quantity,
                'status' => $request->status,
            ]);

        } catch (\Exception $e) {
            // Log the error or return a specific error response
            return response()->json(['error' => 'Failed to create cart.'], 500);
        }
    }

    public function getLatestCartId()
    {
        try {
            $latestCart = Cart::with('product')->orderBy('id', 'desc')->first();
            if ($latestCart) {
                // return Cart::find($latestCart)->first();
                 return response()->json(['latestCartId' => $latestCart]);
            } else {
                return response()->json(['message' => 'No carts found.'], 404);
            }
        } catch (\Exception $e) {
            // Log the error or return a specific error response
            return response()->json(['error' => 'Failed to fetch latest cart ID.'], 500);
        }
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
    
