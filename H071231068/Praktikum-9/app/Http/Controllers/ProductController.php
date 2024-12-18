<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:225',
            'price'=> 'required|numeric',
            'stock'=> 'required|integer',
            'category_id'=> 'required|exists:categories,id',

        ]);

        Product::create([
            'name' => $request->name,  
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'description' => $request->description,  
        ]);

        
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=> 'required|string|max:225',
            'price'=> 'required|numeric',
            'stock'=> 'required|integer',
            'category_id'=> 'required|exists:categories,id',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
