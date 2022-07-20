<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req){

      $user= User::where(['email'=>$req->email])->first();
      $password= User::where(['password'=>$req->password])->first();
       if(!$user || !$password){

         return "Username or Password is wrong";

       }
       else {
        $req->session()->put('user',$user);
         return redirect('/');
       }

    }
}
