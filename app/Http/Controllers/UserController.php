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
    function register(Request $req){

      $user= new User;
      $user->name=$req->name;
      $user->email=$req->email;
      $user->password=Hash::make($req->name);
      $user->save();
      return redirect('login');
       

    }
}
