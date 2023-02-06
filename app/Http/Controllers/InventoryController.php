<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Product;

class InventoryController extends Controller
{
    public function index() {
        $inventories = Inventory::all();
        return view('admin.inventory', compact('inventories'));
    }

    public function add() {
        $products = Product::all();
        return view('admin.inventory-add', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'expire_date' => 'required'
        ]);

        $inventory = new Inventory;
        $inventory->product_id = $request['product_id'];
        $inventory->price = $request['price'];
        $inventory->quantity = $request['quantity'];
        $inventory->expire_date = $request['expire_date'];
        $inventory->save();

        return redirect('/inventory');
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function delete($id) {

    }
}
