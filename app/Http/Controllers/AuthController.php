<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function log(Request $request)
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
        return redirect()->back()->withErrors([
            "login" => "Данные введены неверно"
        ]);
    }
    public function reg(Request $request)
    {
        $data = $request->all([
            "name", "email", "surname", "patronymic", "password", "password_conf"
        ]);
        $user = User::create([
            "name" => $data['name'],
            "surname" => $data['surname'],
            "patronymic" => $data['patronymic'],
            "password" => $data['password']
        ]);
        if ($user) {
            auth("web")->login($user);
            return redirect()->route('profile', Auth::user()->id);
        }
    }
    /**
     * Display the specified resource.
     */
}
