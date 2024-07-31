<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        $user = User::where('email', $request->email)->first();
        $account = "email";

        if (!$user) {
            $user = User::where('username', $request->email)->first();
            $account = "username";
        }

        if (!$user) {
            $user = User::where('phone', $request->email)->first();
            $account = "phone";
        }

        if (!$user) {
            return redirect()->back()->with('error', 'Email/Username/Phone tidak ditemukan');
        }

        if (Auth::attempt([$account => $request->email, 'password' => $request->password], $request->remember)) {
            if($user->role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/masyarakat');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email/Username/Phone tidak ditemukan');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'username' => 'required|string|unique:users',
            'phone' => 'required|string|unique:users',
            'password' => 'required|string',
            'address' => 'required|string',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = 'user';
        $user->save();

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat');
    }

    public function forgot_password()
    {
        return view('auth.forgotpassword', [
            'title' => 'Lupa Password'
        ]);
    }
}
