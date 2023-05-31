<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Cookie;
use App\Models\Utilisateur;

class AuthController extends Controller
{
    //
    public function index(){
        // NOMBRE RANDOM POUR CAPTCHA
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        // RESULTAT DU CAPTCHA
        $result = $number1 + $number2;
        session(['captcha_result' => $result]);

        return view('connexion', compact('number1', 'number2'));
    }

    public function store(Request $request){
        // RECUPERER LES DONNEES
        $login = $request->input('username');
        $pwd = $request->input('password');
        $captcha = $request->input('captcha');

        // LECTURE DU FICHIER DATA.TXT
        $users = file_get_contents(base_path('resources/data/connexion.txt'));

        // RECUPERER LE RESULTAT DU CAPTCHA
        $result = session('captcha_result');

        // VERIFICATION CAPTCHA
        if ($captcha == $result){
        // PARCOURS CHAQUE LIGNE DU FICHIER
        foreach(explode("\n", $users) as $user){
            // SÉPARER LE NOM D'UTILISATEUR ET LE MOT DE PASSE PAR LE CARACTÈRE DE DEUX POINTS (:)
            $credentials = explode(':', $user);

            // VÉRIFIER SI LE LOGIN ET LE MDP CORRESPONDENT
            if ($login == $credentials[0] && Hash::check($pwd, $credentials[1])){
                // CRÉER UNE SESSION UTILISATEUR
                $userTest = new Utilisateur(['username' => $credentials[0], 'password' => $credentials[1]]);
                Auth::login($userTest);

                $request->session()->put('user', $userTest);

                // REDIRIGER VERS LA PAGE COMPTE AVEC UN COOKIE LOGIN
                return redirect()->intended('/compte');
            }
        }
            return redirect()->back()->withErrors([
                'error' => "Le captcha n'est pas valide"
            ]);
        }

        // Si les informations d'identification ne sont pas valides, l'utilisateur est redirigé vers la page de connexion avec un message d'erreur
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'error' => "L'email et/ou le mot de passe ne sont pas valides."
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('vue_connexion');
    }
}
