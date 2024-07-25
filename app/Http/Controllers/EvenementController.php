<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{

    //page qui affiche les évenements dans l'espace administrateurs
    public function liste_evenement()
    {
        $evenements = Evenement::paginate(4);
        return view('evenement/liste', compact('evenements'));
    }

    public function ajout_evenement()
    {
        return view('evenement/ajout');
    }

    //ajouter des évènement faire en sorte que ces évènements vont dans la base de donnée
    public function ajout_evenement_taitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'Description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'heure' => 'required',
            'image' => 'required',
        ]);

        $evenement = new Evenement();
        $evenement->nom = $request->input('nom');
        $evenement->Description = $request->input('Description');
        $evenement->date = $request->input('date');
        $evenement->lieu = $request->input('lieu');
        $evenement->heure = $request->input('heure');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/evenements/', $filename);
            $evenement->image = $filename;
        } else {
            $evenement->image = '';
        }


        // Ajoutez dd pour afficher le contenu de la variable $evenement
        //  dd($evenement);

        $evenement->save();

        return redirect('/ajout')->with('status', 'L\'évenement à bien été ajouté avec succces.');
    }

    // la mise à jour des différents évènements
    public function update_evenement($id)
    {
        $evenements = Evenement::find($id);
        return view('evenement/update', compact('evenements'));
    }

    public function update_evenement_taitement(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'Description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'heure' => 'required',
            'image' => 'required',
        ]);
        $evenement = Evenement::find($request->id);
        $evenement->nom = $request->input('nom');
        $evenement->Description = $request->input('Description');
        $evenement->date = $request->input('date');
        $evenement->lieu = $request->input('lieu');
        $evenement->heure = $request->input('heure');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/evenements/', $filename);
            $evenement->image = $filename;
        } else {
            $evenement->image = '';
        }


        $evenement->update();
        return redirect('/evenement')->with('status', 'L\'évenement à bien été modifier avec succces.');
    }

    // la suppression des évènements de la base de donnée et de l'espace administrateurs
    public function delete_evenement($id)
    {

        $evenement = Evenement::find($id);
        $evenement->delete();
        return redirect('/evenement')->with('status', 'L\'évenement à bien été supprimé avec succces.');
    }

    public function affiche()
{
    $evenements = Evenement::all();
    return view('evenement/evenement', compact('evenements'));
}
}

        // Validate the request data
        // $validated = $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'Description' => 'required|string',
        //     'date' => 'required|date',
        //     'lieu' => 'required|string|max:255',
        //     'heure' => 'required|string|max:255',
        //     'image' => '|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $image = $request->file('image');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $imageName);

        // $evenement = new Evenement([
        //     'nom' => $request->input('nom'),
        //     'Description' => $request->input('Description'),
        //     'date' => $request->input('date'),
        //     'lieu' => $request->input('lieu'),
        //     'heure' => $request->input('heure'),
        //     'image_path' => 'images/'.$imageName,
        // ]);


        // Initialize new Evenement model
        // $evenement = new Evenement();
        // $evenement->nom = $request->input('nom');
        // $evenement->Description = $request->input('Description');
        // $evenement->date = $request->input('date');
        // $evenement->lieu = $request->input('lieu');
        // $evenement->heure = $request->input('heure');



        // Handle file upload
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move(public_path('uploads/evenements'), $filename);
        //     $evenement->image = $filename;
        // } else {
        //     $evenement->image = null; // It's better to use null instead of an empty string
        // }

        // Debugging statement to check the content of the Evenement object
        // dd($evenement);

        // Save the Evenement object to the database
        // $evenement->save();
