<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return ProductCategory::all();
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|unique:product_categories,name',   //'unique:table_name,column_name'
        ]);

        return ProductCategory::create($fields);
    }

   
    public function show(string $id)
    {
        return ProductCategory::find($id);
    }

    
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $product = ProductCategory::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ProductCategory::destroy($id);
    }
}
