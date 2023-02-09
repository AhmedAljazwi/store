<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    public function add($id) {
        if(!Auth::user()) {
            return 'LOGIN';
        }

        $cartItem = new CartItem;
        $cartItem->user_id = 1;
        $cartItem->inventory_id = $id;
        $cartItem->quantity = 1;
        $cartItem->save();

        return redirect('/');
    }
}
