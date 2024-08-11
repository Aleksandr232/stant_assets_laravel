<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{

    public function authorization()
    {
        return view('auth.auth',  ['scrollToForm' => true]);
    }


    protected function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $userToken = $user->createToken('remember_token')->plainTextToken;
        $user->remember_token = $userToken;
        $user->save();

        // Авторизуем пользователя
        Auth::login($user);

        if (Auth::user()->is_admin) {
            session()->flash('success', 'Добро пожаловать, ' . Auth::user()->name . '!');
            return redirect()->route('admin');
        }elseif(Auth::user()){
            return redirect()->route('account');
        } else {
            return redirect()->route('home');
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();


        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::create([
                'google_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('random_password'),
            ]);


            Auth::login($newUser);

        }

        if (Auth::user()->is_admin) {
            session()->flash('success', 'Добро пожаловать, ' . Auth::user() ->  name . '!');
            return redirect()->route('admin');
        }elseif(Auth::user()){
            return redirect()->route('account');
        }else{
            return redirect()->route('404');
        }



        /* return redirect()->route('admin.dashboard'); */
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->put('user', Auth::user());
            if (Auth::user()->is_admin) {
                session()->flash('success', 'Добро пожаловать, ' . Auth::user()->name . '!');
                return redirect()->route('admin');
            }elseif(Auth::user()){
                return redirect()->route('account');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('error', 'Некорректный логин или пароль');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }





}
