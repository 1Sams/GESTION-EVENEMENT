<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur; // Importez le modèle approprié
use Illuminate\Support\Facades\Hash;
class InscriptionController extends Controller
{
    public function register()
    {
        return view('inscription'); // Retourne la vue d'inscription
    }

    // Gestion de l'inscription
    public function inscription_post(Request $request)
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
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);

        // Sauvegarde de l'utilisateur dans la base de données
        $utilisateur->save();
        return redirect('categories')->with('status','Votre inscription a bien été pris en compte');
        // Redirection avec un message de succès
        // return redirect('/Gestion')->with('success', 'Inscription réussie !');
    }



    }

