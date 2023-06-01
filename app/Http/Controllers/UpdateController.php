<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{
    public function index()
    {
        $authFilePath = base_path('resources/data/connexion.txt');
        $dataFilePath = base_path('resources/data/data.txt');

        $authData = File::get($authFilePath);
        $data = File::get($dataFilePath);

        // Séparez les données dans un tableau
        $authData = explode(':', $authData);
        $data = explode(':', $data);

        // Récupérez les valeurs individuelles
        $username = $authData[0];
        $email = $data[0];
        $civilite = $data[1];
        $rue = $data[2];
        $npa = $data[3];
        $ville = $data[4];

        // Passez les données à la vue
        return view('updateCompte', compact('username', 'email', 'civilite', 'rue', 'npa', 'ville'));
    }

    public function update(Request $request){
        // VALIDE LES ENTREES
        $validateData = $request->validate([
            'username' => 'required|regex:/^[^A-Z@]*$/|max:20',
            'pwd' => 'required|regex:/^(?=.*[A-Z]).{8,}$/',
            'email' => 'required|regex:/^([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/',
            'civilite' => 'required',
            'rue' => 'required|regex:/^[a-zA-Z0-9\s\']{1,255}$/',
            'npa' => ['required','regex:/^(100[0-9]|10[1-9][0-9]|9[0-5][0-9]{2}|965[0-8])$/'],
            'ville' => 'required|regex:/^[a-zA-Z\s\']{1,50}$/',
        ], [
            // MESSAGE D'ERREUR EN CAS DE NON RESPECT DE LA REGEX
            'username.regex' => "Le nom d'utilisateur ne doit pas contenir de majuscules et de '@'.",
            'pwd.regex' => "Le mot de passe doit contenir au moins 8 caractères et une majuscule.",
            'email.regex' => "L'email doit contenir un '@' et un '.'",
            'rue.regex' => "La rue ne doit contenir que des lettres, des espaces et des apostrophes.",
            'npa.regex' => "Le NPA doit être un nombre entre 1000 et 9658.",
            'ville.regex' => "La ville ne doit contenir que des lettres, des espaces et des apostrophes."
        ]);

        // RECUPERER LES DONNEES
        $login = $validateData['username'];
        $pwd = $validateData['pwd'];
        $email = $validateData['email'];
        $civilite = $validateData['civilite'];
        $rue = $validateData['rue'];
        $npa = $validateData['npa'];
        $ville = $validateData['ville'];

        // HASHAGE MOT DE PASSE
        $pwdHash = Hash::make($pwd);

        // CHEMIN VERS LES FICHIERS
        $authFilePath = base_path('resources/data/connexion.txt');
        $dataFilePath = base_path('resources/data/data.txt');

        // MODIFIER LE FICHIER connexion.txt
        $authData = $login . ":" . $pwdHash;
        File::put($authFilePath, $authData);

        // MODIFIER LE FICHIER data.txt
        $data = $email . ":" . $civilite. ":" . $rue . ":" . $npa . ":" . $ville;
        File::put($dataFilePath, $data);

        // MESSAGE DE SUCCES
        return redirect()->route('vue_index')->with('success', 'Les informations ont été mises à jour');
    }
}
