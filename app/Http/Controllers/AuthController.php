<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        // Validate the input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Check if the "Remember Me" checkbox is checked
        $remember = $request->has('remember_me') ? true : false;
        // Attempt login with "remember me" functionality
        if(Auth::attempt($validated, $remember)){
            $request->session()->regenerate();
            return redirect()->route('ninjas.index')->with('success', 'Login successful!');
        }
        return back()->with('error', 'Invalid credentials!');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create($validated);

        // login the user with facades and redirect to ninjas.index
        Auth::login($user);
        return redirect()->route('ninjas.index')->with('success', 'Registration successful!');
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful!');
    }
}
