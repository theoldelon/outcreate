<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Display the registration form
    public function register()
    {
        return view("auth.register");
    }

    // Handle client registration
    public function registerClient(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'client';  // Assuming you have a role field

        if ($user->save()) {
            // Redirect to login page after successful registration
            return redirect(route('login'))->with("success", "Client registered successfully. Please log in.");
        }

        return redirect(route('register'))->with("error", "An error occurred while creating the client.");
    }

    // Handle freelancer registration
    public function registerFreelancer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'freelancer'; // Assuming you want to set role here

        if ($user->save()) {
            // Redirect to login page after successful registration
            return redirect(route('login'))->with("success", "Freelancer registered successfully. Please log in.");
        }

        return redirect(route('register'))->with("error", "An error occurred while creating the freelancer.");
    }

    public function login()
    {
        return view("auth.login");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->role == 'freelancer') {
                return redirect()->intended(route('browse-jobs'))->with('success', 'Logged in successfully!');
            }
    
            return redirect()->intended(route('browse-jobs'))->with('success', 'Logged in successfully!');
        }
    
        return redirect(route('login'))->with('error', 'Wrong credentials!');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
