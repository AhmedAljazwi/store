<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class BillController extends Controller
{
    public function index() {
        $bills = Bill::all();
        return view('admin.bill', compact('bills'));
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }
}
