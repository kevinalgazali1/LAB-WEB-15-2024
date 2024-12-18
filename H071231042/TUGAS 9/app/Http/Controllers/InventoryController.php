<?php
namespace App\Http\Controllers;

use App\Models\InventoryLog;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $logs = InventoryLog::with('product')->get();
        return view('inventoryLog.index', compact('logs'));
    }

    public function create()
    {
        $products = Product::all();
        return view('inventoryLog.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'type' => 'required',
            'quantity' => 'required|integer|min:0',
            'date' => 'required|date',
            
        ],
        [
            
            'quantity.min' => 'Quantity must be atleast 0',

        ]);

        InventoryLog::create($request->all());
        return redirect()->route('inventoryLog.index')->with('success', 'Inventory log added successfully.');

        // InventoryLog::store($request->all());
        // return redirect()->route('inventoryLog.create')->with('success', 'Quantity must be atleast 0');
    }

    public function update(Request $request, Inventory $inventoryLog){
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ],[
            'quantity.min' => 'Quantity must be atleast 0',
        ]);
    }

    

    public function destroy(InventoryLog $inventoryLog)
    {
        $inventoryLog->delete();
        return redirect()->route('inventoryLog.index')->with('success', 'Inventory log deleted successfully.');
    }
}