<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'contact' => 'required|string|max:20',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:users',
            
            'dob' => 'required|date',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('register.form')
                ->withErrors($validator)
                ->withInput();
        }
    
        $imagePath = $request->file('image')->store('profile_images', 'public');
    
        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'contact' => $request->input('contact'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            
            'dob' => $request->input('dob'),
            
            'image' => $imagePath,
            'password' => Hash::make($request->input('password')),
        ]);
    
        Auth::login($user);
    
        Alert::success('Success', 'Successfully registered!');
    
        return redirect()->intended('/');
    }


}
