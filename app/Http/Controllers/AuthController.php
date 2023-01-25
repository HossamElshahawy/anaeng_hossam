<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }


    public function handleRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'job' => 'required|string|max:100',
            'password' => 'required|string|max:50|min:8',

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'job' => $request->job,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('render_create_profile');
    }


    public function login()
    {
        return view('auth.login');
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('Front.Socialmedia.edituser', compact('user'));
    }


    public function handeledit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return Redirect::back();
    }


    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:8'
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$is_login) {
            return back();
        }
        return redirect()->route('render_create_profile');
    }


    public function logout()
    {
        auth::logout();
        return redirect()->route('auth.login');
    }

    public function reset_passowrd(Request $request)
    {
        $request->validate([
            'password' => 'required|string|max:50|min:8'
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$is_login) {
            return back();
        }
        return redirect()->route('render_create_profile');
    }


//    public function redirectToGoogle()
//
//    {
//        return Socialite::driver('google')->redirect();
//    }
//
//    public function handleGoogleCallback()
//
//    {
//
//        $user = Socialite::driver('google')->user();
//        $localUser = User::where('email', $user->email)->first();
//        if (!$localUser) {
//            $localUser = User::create([
//                'name' => $user->name,
//                'email' => $user->email,
//                'google_id' => $user->id,
//                'password' => Hash::make(Str::random(40)),
//            ]);
//        }
//        Auth::login($localUser);
//        return redirect('/');
//    }




}
