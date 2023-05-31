@extends('layouts.mainLayout')

<!-- Section 'content' créer dans le mainLayout -->
@section('content')
    <section id="section-compte">
        <div class="container-fluid container-compte">
            <h1>Bienvenue sur BIG-R informatique</h1>
            <a href="{{ route('vue_update')}}">
                <button type="submit" action="#">Modifier informations personelles</button>
            </a>
            <div class="container-compte-image">
                <h4>Pour nos clients les plus fidèles, nous avons de super offres</h4>
                <div class="div-compte-imgage">
                    <div class="wrap-price-compte color-div-compte-1">
                        <div class="price-innerdetail text-center">
                            <h5 style="color: rgba(255, 255, 255, 0.8);">Support à distance</h5>
                            <p class="prices">1'000 CHF</p>
                            <span class="float-bottom">6 mois / </span>
                            <span>heures : illimité</span>
                            <div class="detail-pricing">
                                <span class="float-left"> <i class="bi bi-check2-circle"></i>Pas de frais de déplacement</span>
                            </div>
                            <a href="#" class="btn btn-secondary mt-5 button-rdv" style="color:#2c6db8;background: white;" disabled>S'ABONNER</a>
                        </div>
                    </div>
                </div>
                <div class="div-compte-imgage">
                    <div class="wrap-price-compte color-div-compte-2">
                        <div class="price-innerdetail text-center">
                            <h5 style="color: rgba(255, 255, 255, 0.8);">Support à distance</h5>
                            <p class="prices">1'600 CHF</p>
                            <span class="float-bottom">1 ans / </span>
                            <span>heures : illimité</span>
                            <div class="detail-pricing">
                                <span class="float-left"> <i class="bi bi-check2-circle"></i>Pas de frais de déplacement</span>
                            </div>
                            <a href="#" class="btn btn-secondary mt-5 button-rdv" style="color:#2c6db8;background: white;" disabled>S'ABONNER</a>
                        </div>
                    </div>
                </div>
                <div class="div-compte-imgage">
                    <div class="wrap-price-compte color-div-compte-1">
                        <div class="price-innerdetail text-center">
                            <h5 style="color: rgba(255, 255, 255, 0.8);">Support à domicile</h5>
                            <p class="prices">1'400 CHF</p>
                            <span class="float-bottom">6 mois / </span>
                            <span>heures : illimité</span>
                            <div class="detail-pricing">
                                <span class="float-left"> <i class="bi bi-check2-circle"></i>frais de déplacement compris</span>
                            </div>
                            <a href="#" class="btn btn-secondary mt-5 button-rdv" style="color:#2c6db8;background: white;" disabled>S'ABONNER</a>
                        </div>
                    </div>
                </div>
                <div class="div-compte-imgage">
                    <div class="wrap-price-compte color-div-compte-2">
                        <div class="price-innerdetail text-center">
                            <h5 style="color: rgba(255, 255, 255, 0.8);">Support à domicile</h5>
                            <p class="prices">2'240 CHF</p>
                            <span class="float-bottom">1 ans / </span>
                            <span>heures : illimité</span>
                            <div class="detail-pricing">
                                <span class="float-left"> <i class="bi bi-check2-circle"></i>frais de déplacement compris</span>
                            </div>
                            <a href="#" class="btn btn-secondary mt-5 button-rdv" style="color:#2c6db8;background: white;" disabled>S'ABONNER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
