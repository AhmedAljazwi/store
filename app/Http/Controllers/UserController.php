<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $user->password = bcrypt($request['password']);
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

    public function login() {
        return view('login');
    }

    public function check(Request $request) {
        $cred = $request->only('email', 'password');
        if(Auth::attempt($cred)) {
            return redirect('/');
        }
        else {
            return redirect('/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
