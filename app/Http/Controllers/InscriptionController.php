<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur; // Importez le modèle approprié

class InscriptionController extends Controller
{
    public function register()
    {
        return view('inscription'); // Retourne la vue d'inscription
    }

    // Gestion de l'inscription
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Création d'un nouvel utilisateur
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $request->input('nom');
        $utilisateur->prenom = $request->input('prenom');
        $utilisateur->email = $request->input('email');
        $utilisateur->password = bcrypt($request->input('password'));

        // Sauvegarde de l'utilisateur dans la base de données
        $utilisateur->save();

        // Redirection avec un message de succès
        // return redirect('/Gestion')->with('success', 'Inscription réussie !');
    }

    public function show(){
      return view('categories');
    }
}
