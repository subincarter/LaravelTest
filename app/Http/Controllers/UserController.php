<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{

    public function usersList()
    {
        $users =  Registration::get();
        return view('userList', ['users' => $users]);
    }
    public function  usersRegister(Request $req)
    {
        Registration::create([
            'name' => $req->name,
            'phone' => $req->phone,
            'address' => $req->address,
            'place' => $req->place,
            'email' => $req->email,
            'password' => password_hash($req->password, PASSWORD_DEFAULT),
        ]);
        return redirect()->route('home');
    }

    public function allproduct()
    {
        $product =  Product::get();
        return view('allProduct', ['data' => $product]);
    }
    public function viewProduct($id)
    {
        $product =  Product::where('id', $id)->get();
        return view('viewProduct', ['data' => $product]);
    }

    public function addCart($id)
    {
        Cart::create([
            'userID' => session('user'),
            'productID' => $id,
        ]);

        echo 'added to the cart';
    }
    public function showCart()
    {
        $data= Cart::with('product')->where('userID', session('user'))->get();
        return view('cart',['data'=>$data]);
    }

    public function remove($cartID)
    {
       Cart::where('userID', session('user'))
            ->where('id',$cartID)->delete();

        return redirect()->route('allproduct');
    }
}
