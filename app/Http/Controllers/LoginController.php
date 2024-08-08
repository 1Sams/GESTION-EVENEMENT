<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login'); // Retourne la vue d'inscription
    }

    public function dologin(LoginRequest $request)
    {



        $credentials = $request->validated();


        // $credentials = $request->only('email', 'password');

       dd((Auth::attempt($credentials)));

    // Tentative de connexion avec les identifiants
    if (Auth::attempt($credentials)) {
        // Authentification réussie, redirection de l'utilisateur vers le tableau de bord

        return view('categories')->with('success', 'Vous êtes connecté avec succès!');
    } else {
        // Authentification échouée, retour à la page de connexion avec un message d'erreur
        return redirect()->back()->with('error', 'Identifiants incorrects. Veuillez réessayer.');
    }



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





        //  return view('categories');
    }


}




