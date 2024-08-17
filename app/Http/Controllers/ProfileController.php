<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Display the client profile
    public function show()
    {
        return view('profiles.show-client'); // Ensure this matches your Blade file
    }

    // Display the freelancer profile
    public function showFreelancer()
    {
        $user = Auth::user();
        
        // Check if the logged-in user is a freelancer
        if ($user->role === 'freelancer') {
            return redirect()->route('browse-jobs');
        }
        
        return redirect()->route('home')->with('error', 'Unauthorized access.');
    }

    // Handle profile update
    public function update(Request $request)
    {
        // Handle the profile update logic here
        // For example: validate input, update user profile, etc.
        // Redirect or return response as needed
    }
}
