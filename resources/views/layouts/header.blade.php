<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>M133 - BIG-R</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- FILE CSS, JS, SCSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style-index.css', 'resources/css/style-connexion.css', 'resources/css/style-compte.css', 'resources/css/style-update.css'])

    <!-- LOGO ONGLET -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo-rond.png') }}">

    <!-- ICON -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo" href="{{ route('vue_index') }}">
                <img src="{{ asset('img/logo-final.png') }}" style="height:90px;width:100px;">
            </a>
            <button class="navbar-toggler" style="height:60px;background:#2c6db8;"type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto" style="margin-top:1%;" id="top-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vue_index') }}#">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vue_index') }}#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vue_index') }}#tarifs">TARIFS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vue_index') }}#rdv">RDV</a>
                    </li>
                </ul>

                <ul class="navbar-nav" style="margin-top:1%;" id="top-menu">

                    @if(Session::has('user'))
                        <li class="nav-item">
                            <a class="nav-link" style="color:#2c6db8;"href="{{ route('vue_conpte') }}">PACK D'OFFRE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:#2c6db8;"href="{{ route('vue_update') }}">PROFIL</a>
                        </li>
                    @endif
                    <li class="nav-item" style="text-align:right">
                        @if(Session::has('user'))
                            <a class="nav-link" href="{{ route('logout') }}">DECONNEXION</a>
                        @else
                            <a class="nav-link" href="{{ route('vue_connexion') }}">CONNEXION</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
