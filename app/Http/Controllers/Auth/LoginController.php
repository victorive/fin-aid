<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        return view('auth.login');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (!auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password

        ])){
            return back()->with('status', 'Incorrect login details');
        } 
        else{

            return redirect()->route('dashboard');
        }
    }

    public function logout() {
        
        auth()->logout();

        return redirect()->route('home');
    }
}
