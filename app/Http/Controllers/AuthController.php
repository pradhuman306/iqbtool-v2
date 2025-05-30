<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        if (Auth::check()) {
            return redirect('/admin/edit');
        }

        return view('login');

    }

    // Login method
 public function login(Request $request)
{
    // Validate input fields
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    // Attempt to log the user in
    if (Auth::attempt($credentials)) {
        // Regenerate session to prevent fixation attacks
        $request->session()->regenerate();

        return redirect()->intended('admin/edit'); // or wherever you want to send after login
    }

        return back()->with('error', 'Invalid credentials');
}


    // Logout method
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin')->with('success', 'Logged out successfully');

    }
}
