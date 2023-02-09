<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\CartItem;

class HomeController extends Controller
{
    public function index() {
        $inventories = Inventory::all();
        $cartItems = CartItem::count();
        return view('home', compact('inventories', 'cartItems'));
    }
}
