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
            'img' => 'required',
            'category_id' => 'required'
        ]);

        $product = new Product;
        $product->name = $request['name'];
        $product->img = $request['img'];
        $product->category_id = $request['category_id'];
        $product->save();

        return redirect('/product');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product-edit', compact('product', 'categories'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
            'category_id' => 'required'
        ]);

        $product = Product::find($id);
        $product->name = $request['name'];
        $product->img = $request['img'];
        $product->category_id = $request['category_id'];
        $product->save();

        return redirect('/product');
    }

    public function delete($id) {

    }
}
