<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class HomeController extends Controller
{
    public function index() {
        $inventories = Inventory::all();
        return view('home', compact('inventories'));
    }
}
