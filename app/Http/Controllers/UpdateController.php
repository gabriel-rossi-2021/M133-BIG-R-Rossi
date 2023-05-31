<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{
    public function index()
    {
        return view('updateCompte');
    }

    public function update(Request $request){
        // VALIDE LES ENTREES
        $validateData = $request->validate([
            'username' => 'required|regex:/^[^A-Z@]*$/|max:20',
            'pwd' => 'required|regex:/^(?=.*[A-Z]).{8,}$/',
            'email' => 'required|regex:/^([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/',
            'civilite' => 'required'
        ], [
            // MESSAGE D'ERREUR EN CAS DE NON RESPECT DE LA REGEX
            'username.regex' => "Le nom d'utilisateur ne doit pas contenir de majuscules et de '@'.",
            'pwd.regex' => "Le mot de passe doit contenir au moins 8 caractères et une majuscule.",
            'email.regex' => "L'email doit contenir un '@' et un '.'"
        ]);

        // RECUPERER LES DONNEES
        $login = $validateData['username'];
        $pwd = $validateData['pwd'];
        $email = $validateData['email'];
        $civilite = $validateData['civilite'];

        // HASHAGE MOT DE PASSE
        $pwdHash = Hash::make($pwd);

        // CHEMIN VERS LES FICHIERS
        $authFilePath = base_path('resources/data/connexion.txt');
        $dataFilePath = base_path('resources/data/data.txt');

        // MODIFIER LE FICHIER connexion.txt
        $authData = $login . ":" . $pwdHash;
        File::put($authFilePath, $authData);

        // MODIFIER LE FICHIER data.txt
        $data = $email . ":" . $civilite;
        File::put($dataFilePath, $data);

        // MESSAGE DE SUCCES
        return redirect()->route('vue_index')->with('success', 'Les informations ont été mises à jour');
    }
}
