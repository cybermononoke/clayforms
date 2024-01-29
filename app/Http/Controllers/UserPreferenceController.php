<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPreference;


class UserPreferenceController extends Controller
{
    public function showForm()
{
    // Check if the user is authenticated
    if(auth()->check()) {
        $user = auth()->user();

        // Use findOrCreate instead of firstOrNew to ensure the user_id is set
        $preferences = UserPreference::firstOrCreate(['user_id' => $user->id]);

        $backgroundImages = ['grad.png', 'grad2.png', 'grad3.png'];

        return view('preferences.form', compact('user', 'preferences', 'backgroundImages'));
    } else {
        // Redirect to login if the user is not authenticated
        return redirect('/login');
    }
}


public function update(Request $request)
{
    $request->validate([
        'background_image' => 'required|in:grad.png,grad2.png,grad3.png',
    ]);

    // Check if the user is authenticated
    if (auth()->check()) {
        UserPreference::updateOrCreate(
            ['user_id' => auth()->id()],
            ['background_image' => $request->input('background_image')]
        );

        return redirect()->back()->with('success', 'Background image updated successfully.');
    } else {
        // Redirect to login if the user is not authenticated
        return redirect('/login');
    }
}

    
}
