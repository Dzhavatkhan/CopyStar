<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.auth');
    }
    public function signUp()
    {
        return view('auth.reg');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(LoginRequest $request)
    {
        $data = $request->all([
            "login",
            "password"
        ]);
        $login = $data['login'];
        $password = $data['password'];
        if (auth('web')->attempt($data)) {
            return redirect()->route('profile', Auth::user()->id);
        }
        if (auth('admin')->attempt($data)) {
            return redirect()->route('admin');
        }
        return redirect()->back()->withErrors([
            "login" => "Данные введены неверно"
        ]);
    }
    public function reg(RegRequest $request)
    {
        $data = $request->all([
            "name",
             "email",
              "surname",
               "patronymic",
                "password",
                "password_confirmation",
                 "login"
        ]);
        $user = User::create([
            "name" => $data['name'],
            "surname" => $data['surname'],
            "login" =>$data['login'],
            "email" => $data['email'],
            "patronymic" => $data['patronymic'],
            "password" => $data['password']
        ]);
        if ($user) {
            auth("web")->login($user);
            return redirect()->route('profile', Auth::user()->id);
        }
    }
    public function logout(){

        auth('web')->logout();
        return redirect()->route('home');

    }
    /**
     * Display the specified resource.
     */
}
