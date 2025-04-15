<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'error' => 'Invalid Credentials'
            ]);
        }

        if (Auth::user()->user_type === 'Admin') {
            return to_route('admin.dashboard')->with('message', 'Successfully Logged In');
        } else {
            return to_route('admin.post.index')->with('message', 'Successfully Logged In');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('message', 'Successfully Logged Out');
    }

    public function changePassword()
    {
        return view('admin.passwords.change-password');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
            return to_route('change-password')->with('message', 'Password Updated Successfully');
        } else {
            throw ValidationException::withMessages([
                'error' => 'Current Password Invalid'
            ]);
        }
    }

    public function forgotPassword() {
        return view('auth.reset-password');
    }

    public function resetPassword(Request $request) {
        $attributes = $request->validate([
            'username' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();
        if(!$user) {
            throw ValidationException::withMessages([
                'error' => 'The username is Invalid!'
            ]);
        }

        $user->update([
            'password' => Hash::make($request->username)
        ]);

        return to_route('forgot-password')->with('message', 'Password Reset Successfully!');
    }
}
