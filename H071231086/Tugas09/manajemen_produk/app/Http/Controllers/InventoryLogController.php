<?php

namespace App\Http\Controllers;
use App\Models\InventoryLog;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class InventoryLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = InventoryLog::with('product')->get();
        return view('inventory-logs.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('inventory-logs.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:restock,sold',
            'quantity' => 'required|integer',
            'date' => 'required|date'
        ]);
    
        $log = InventoryLog::create($request->all());
    
        // Update stock based on log type
        $product = Product::find($request->product_id);
        if ($request->type === 'restock') {
            $product->stock += $request->quantity;
        } elseif ($request->type === 'sold') {
            $product->stock -= $request->quantity;
        }
        $product->save();
    
        return redirect()->route('inventory-logs.index')->with('success', 'Log inventaris berhasil ditambahkan.');
    
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
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
