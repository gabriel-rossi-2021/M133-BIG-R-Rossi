@extends('layouts.mainLayout')

@section('content')
    <section id="section-connexion">
        <div class="container-fluid" id="container-flui-connexion">
            <div class="div-connexion-form">
                <h1>Connexion</h1>
                <form action="{{ route('store_connexion')}}" method="POST">
                    @csrf
                    <!-- Name -->
                    <div class="form-group label-floating">
                      <label class="control-label form-label" for="username">Nom d'utilisateur :</label>
                      <input class="form-control" id="username" type="text" name="username" placeholder="admin" required>
                    </div>
                    <!-- email -->
                    <div style="margin-top: 2%;" class="form-group label-floating">
                      <label class="control-label form-label" for="password">Mot de passe :</label>
                      <input class="form-control" id="password" type="password" name="password" placeholder="password" required>
                    </div>

                    <!-- captcha -->
                    <div style="margin-top: 2%;" class="form-group label-floating">
                        <label for="captcha" class="control-label form-label">Résoudre l'addition : </label>
                        <span id="captcha" style="font-size: 20px"><strong>{{ $number1 }} + {{ $number2}} = </strong></span>
                        <input type="number" class="form-control" id="captcha" name="captcha" min="1" max="20" required>
                    </div>

                    <div style="margin-top: 5%;" class="form-group">
                        @error('error')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button style="background:#2c6db8;color:white;width:100%;"class="btn btn-common" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
