<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function register(){
        return view('admin.auth.register');
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerateToken();

            if(auth()->user()->role == 'customer'){ // route customer
                return redirect()->route('home');
            }else if(auth()->user()->role == 'admin'){ // route admin
                return redirect()->route('admin.dashboard');
            }else{ // route seller
                return 'eee';
            }
        }
        return redirect()->back()->with('loginError', "username atau password salah");
    }

    public function register_acc(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'nama' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('successRegister', 'Sukses registrasi, silahkan login');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }
}
