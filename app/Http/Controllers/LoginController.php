<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login'); // Retourne la vue d'inscription
    }

    public function dologin(LoginRequest $request)
    {
        $credentials = $request->validated();

        dd(Auth::attempt($credentials));



        // $Auth = $request->validate([
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);

        // if(Auth::attempt($Auth)){
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // }
        // return back()->withErrors([
        //     'email' => 'Donnée non conforme.',
        // ])->onlyInput('email', 'password');



        //  $credentials = $request->validated();


        //  if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('acceuil'));
        //  }
        //  return to_route('auth.login')->withErrors([
        //     'email' =>"Email invalide"
        //  ])->onlyInput('email');


        //  $credentials = $request->only('email', 'password');
        //         if($credentials){
        //             return redirect('/categories');
        //         }


         return view('categories');
    }


}




