<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function add() {
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender_id' => 'required'
        ]);

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->gender_id = $request['gender_id'];
        $user->save();

        return redirect('/user');
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function delete($id) {

    }
}
