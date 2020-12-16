<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function Login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "User Email Or Password not Match!";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function Register(Request $req){
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        if($user->email!=$req->email){
                  $user->save();
             return redirect('/login');
        }
        else{
            return "This Email Already Exists!";
        }
        
    }
}
