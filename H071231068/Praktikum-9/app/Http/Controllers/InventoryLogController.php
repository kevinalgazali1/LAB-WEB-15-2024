<?php

namespace App\Http\Controllers;

use App\Models\InventoryLog;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryLogController extends Controller
{
   
    public function index()
    {
        $inventoryLogs = InventoryLog::with('product')->get();
        return view('inventory_logs.index', compact('inventoryLogs'));
    }

    public function create()
    {
        $products = Product::all();
        return view('inventory_logs.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:restock,sold',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);

        InventoryLog::create($request->all());
        return redirect()->route('inventory_logs.index')->with('success', 'Inventory log created successfully');
    }

    public function destroy(InventoryLog $inventoryLog)
    {
        $inventoryLog->delete();
        return redirect()->route('inventory_logs.index')->with('success', 'Inventory log deleted successfully');
    }
}
