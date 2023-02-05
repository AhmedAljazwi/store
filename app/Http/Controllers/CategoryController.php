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
}
