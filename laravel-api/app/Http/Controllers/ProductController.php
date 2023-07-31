<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
        //display product with categories that it attach to 
        // return Product::with('productCategory')->get();

        // $products = Product::get();
        // return view('home', compact("products")); // so u'll be able to call products to frontend
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $path = '';
        if($request->hasFile('image')) {
            //public here is to clear laravel cache because we want path to autowrite and access publicly
            $path = $request->image->store('photos', 'public');
        }

        $path2 = '';
        if($request->hasFile('image2')) {
            //public here is to clear laravel cache because we want path to autowrite and access publicly
            $path2 = $request->image2->store('photos', 'public');
        }

        $path3 = '';
        if($request->hasFile('image3')) {
            //public here is to clear laravel cache because we want path to autowrite and access publicly
            $path3 = $request->image3->store('photos', 'public');
        }

        $path4 = '';
        if($request->hasFile('image4')) {
            //public here is to clear laravel cache because we want path to autowrite and access publicly
            $path4 = $request->image4->store('photos', 'public');
        }

        return Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path,
            'image2' => $path2,
            'image3' => $path3,
            'image4' => $path4,
            "category_id" => $request->category_id,
        ]);
    }

   
    public function show(string $id)
    {
        return Product::find($id);
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    
    public function destroy(string $id)
    {
        return Product::destroy($id);
    }

    
    public function categorize(string $id)
    {
        $category = ProductCategory::find($id);

        if(!$category) {
            return response([
                'message' => 'no given category'
            ]);
        } 
            
        return Product::where('category_id', $id)->get();
    }
}
