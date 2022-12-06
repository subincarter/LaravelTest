<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RegistrationController extends Controller
{

    public function authenticate(Request $req)
    {
        
        if ($req->userType == 'admin' ) {

            $del =  User::where('name', $req->fName)->pluck('password');
            if(!isset($del[0])){
                return 'User not exixts';
            }else{
                $valid = $this->verify($req->password, $del[0]);
                if($valid){
                    $products=  Product::get();
                    return redirect()->route('product');
                }
            }
            
         } else {
            $del =  Registration::where('name', $req->fName)->pluck('password');
            if(!isset($del[0])){
                return 'User not exixts';
            }else{
                $valid = $this->verify($req->password, $del[0]);
                if($valid){
                    $userName =  Registration::where('name', $req->fName)->pluck('id');
                    $req->session()->put('user', $userName[0]);  
                    return redirect()->route('allproduct');
                }else{
                   echo 'error';
                   return redirect()->route('home');

                }
            }
         }
    }

    public function verify($formPass, $password)
    {
        if (password_verify($formPass, $password)) {
            return true;
        } else {
            return false;
        }
    }
}
