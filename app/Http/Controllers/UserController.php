<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        $categories = Category::all();
        return view('client.login', compact('categories'));
    }

    public function register(){
        return view('client.register');
    }
    public function postRegister(Request $request){
         $request->merge(['password'=>Hash::make($request->password)]);
        try {
            User:: create($request->all());
        } catch (\Throwable $th) {
            // dd($th);
        }

      return redirect()->route('login');
    }
    public function postLogin(Request $request){
      if(Auth::attempt(['email' =>$request->email , 'password' => $request-> password])){
        return redirect()->route('index');
        // $products = \App\Models\Product::query()->latest('id')->get();
        // return view('client.index',compact('products'));
      
    }else{
        return redirect()->back()->with('error','Sai tài khoản, mật khẩu');
    }

   
   }
   public function logout(){
   
    Auth::logout();
      return redirect()->back();

 
 }
}