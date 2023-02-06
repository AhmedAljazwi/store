<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function add() {
        return view('admin.category-add');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $category = new Category;
        $category->name = $request['name'];
        $category->save();

        return redirect('/category');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.category-edit', compact('category'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::find($id);
        $category->name = $request['name'];
        $category->save();

        return redirect('/category');
    }

    public function delete($id) {

    }
}
