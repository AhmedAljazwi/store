<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function add() {
        $categories = Category::all();
        return view('admin.product-add', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        $product = new Product;
        $product->name = $request['name'];
        $product->category_id = $request['category_id'];
        $product->save();

        return redirect('/product');
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function delete($id) {

    }
}
