@extends('layouts.mainLayout')

<!-- Section 'content' créer dans le mainLayout -->
@section('content')
    <section id="section-update">
        <div class="container-update">
            <h1>Modification de vos informations</h1>
            <div class="div-form-update wow animated fadeInRight">
                <form action="{{ route('vue_update-form') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username" class="form-label">Nom d'utilisateur :</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="" value="{{ $username }}">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="pwd" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control @error('pwd') is-invalid @enderror" id="pwd" name="pwd">
                        @error('pwd')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email" class="form-label">Adresse email :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="civilite" class="form-label">Civilité :</label>
                        <select class="form-select" name="civilite">
                            <option value="Madame" {{ $civilite == 'Madame' ? 'selected' : '' }}>Madame</option>
                            <option value="Monsieur" {{ $civilite == 'Monsieur' ? 'selected' : '' }}>Monsieur</option>
                            <option value="Autres" {{ $civilite == 'Autres' ? 'selected' : '' }}>Autres</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="rue" class="form-label">Rue :</label>
                        <input type="text" class="form-control @error('rue') is-invalid @enderror" id="rue" name="rue" placeholder="" value="{{ $rue }}">
                        @error('rue')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="npa" class="form-label">NPA :</label>
                        <input type="number" min="1000" max="9658" class="form-control @error('npa') is-invalid @enderror" id="npa" name="npa" placeholder="" value="{{ $npa }}">
                        @error('npa')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="ville" class="form-label">Ville :</label>
                        <input type="text" class="form-control @error('ville') is-invalid @enderror" id="ville" name="ville" placeholder="" value="{{ $ville }}">
                        @error('ville')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-submit mt-5">
                        <button style="background:#2c6db8;color:white;width:100%;"class="btn btn-common" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
