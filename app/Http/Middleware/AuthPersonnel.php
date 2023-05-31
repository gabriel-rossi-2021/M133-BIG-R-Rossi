<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthPersonnel
{
    public function handle($request, Closure $next)
    {
        //ici je fais un petit if pour voir s'il y a bien une session pour pouvoir accèder a certaines pages tels que le profil de l'utilisatuer. Si on essaye de mettre /profil après url, il sera dirigé vers le login
        if (!session()->has('user')) {
            return redirect()->route('vue_connexion')->with('error', 'Veuillez vous connecter pour accéder à votre profil.');
        }

        return $next($request);
    }
}
