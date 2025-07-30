<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['phone' => $credentials['phone'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role_id == 1) {
                return redirect('/admin/dashboard');
            } elseif ($user->role_id == 2) {
                return redirect('/dashboard-kurir');
            } else {
                return redirect('/users/menu');
            }
        }

        return back()->withErrors([
            'phone' => 'Phone number or password is incorrect.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign-in');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required|unique:users',
        'password' => 'required|min:6',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
        'role_id' => 3, // atau sesuai kebutuhan
    ]);

    Auth::login($user);

    if ($user->role_id == 1) {
        return redirect('/dashboard-admin');
    } elseif ($user->role_id == 2) {
        return redirect('/dashboard-kurir');
    } else {
        return redirect('/profile');
    }
}
}
