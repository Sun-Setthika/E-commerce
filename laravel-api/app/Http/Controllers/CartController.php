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
        //
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
    $cartData = $request->input('cart');
    Log::info('Cart Data:', ['cartData' => $cartData]);

    foreach ($cartData as $cartItemData) {
        // Find or create the color with the given name
        $color = Color::firstOrCreate(['name' => $cartItemData['color']]);
        $product = Product::firstOrCreate(['name' => $cartItemData['name']]);
        $size = ProductSize::firstOrCreate(['name' => $cartItemData['size']]);
        // Save the cart item along with the associated color ID
        $cartItem = new Cart([
            'product_id' => $product->id,
            'quantity' => $cartItemData['quantity'],
            'color_id' => $color->id, // Associate the color ID with the cart item
            'product_size_id' => $size->id,
            'status' => 'billed',
            'user_id' => '1',
        ]);
        $cartItem->save();
    }

    return response()->json(['message' => 'Cart data saved successfully']);
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
    
