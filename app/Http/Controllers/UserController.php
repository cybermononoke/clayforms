<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getStatus()
    {
        // Check if the user is logged in
        $isLoggedIn = Auth::check();

        // Get the logged-in user information if available
        $user = $isLoggedIn ? Auth::user() : null;

        return view('user.status', compact('isLoggedIn', 'user'));
    }

    
}
