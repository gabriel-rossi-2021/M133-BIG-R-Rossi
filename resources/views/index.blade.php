@extends('layouts.mainLayout')

<!-- Section 'content' créer dans le mainLayout -->
@section('content')
<div class="scroll-page" style="display:block;scroll-behavior: smooth;">
    <section id="presentation">
      <div class="card mb-3 div-home-page" style="border:0px;margin-top:5%;">
          <div class="img_home card-body" >
              <!-- IMG arrière plan -->
              <img src="{{ asset('img/img-home-1.jpg')}}" alt="">
          </div>
          <br><br>

        <div class="aboutus-section" style="margin-top:5%;">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                  <div class="row-phone">
                      <div class="col-md-3 col-sm-6 col-xs-12" style="width: 100%">
                          <div class="aboutus" style="text-align:justify">
                              <h2 class="aboutus-title">Présentation</h2>
                              <p class="aboutus-text" style="line-height:revert;">Je suis un apprenti informaticien en 3ème années d'apprentissage. Je décide de lancer ma petite entreprise de support informatique</p>
                              <p class="aboutus-text" style="line-height:revert;">J'ai monté la société BIG-R pour aider les personnes qui rencontrent des problèmes sur leur ordinateur ou qui auraient certaines demandes concernant une installation.</p>
                              <a href="#rdv" class="btn btn-secondary mt-5 button-rdv" style="display:flex;justify-content:center;color:white;background:#2c6db8">Prendre RDV</a>
                          </div>
                      </div>
                      <div>
                          <div class="aboutus-banner">
                            <img style="height:400px;width:500px;margin-left: -1%;"src="{{ asset('img/logo-final.png') }}" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- SERVICE -->
    <section class="section services-section" id="services" style="margin-top:2.5%;">
      <h1 class="underline-title">Services</h1>
      <div style="margin-bottom:5%; padding-top:3%;" >
        <div class="container">
            <div class="row">
                <!-- feaure box -->
                <div class="col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Logiciel / Application</h5>
                            <p>Insaller | Mettre à jour | Désinstaller | Réparer un logiciel</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-server"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Système d'exploitation</h5>
                            <p>Installer | Mettre à jour Windows, MacOS, Linux sur votre ordinateur</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-wifi"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Gestion réseaux</h5>
                            <p>Installer votre box TV | Wifi de votre fournisseur Swisscom / Salt.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-truck front"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Dépannage</h5>
                            <p>Problème avec un logciel / réseaux / un message d'erreur / écran bleu...</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Sauvegarde de fichiers</h5>
                            <p>Sauvegarder vos photos | vidéos | fichiers sur un HDD / SSD</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Cours basique</h5>
                            <p>Cours sur les compétences de base à savoir pour Word | PowerPoint | Excel</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
            </div>
        </div>
      </div>
    </section>

    <!-- TARIFS -->
    <div style="margin-top: 2.5%;margin-bottom:5%;" id="tarifs">
      <section id="price-section" style="background: linear-gradient(45deg, black, transparent); margin-bottom:10px;">
        <h1 class="underline-title" style="padding-top:2%;">TARIFS</h1>
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4 pb-5 pb-lg-0">
                    <div class="wrap-price">
                        <div class="price-innerdetail text-center">
                            <h5 style="color: rgba(255, 255, 255, 0.8);">Service à distance</h5>
                            <p class="prices">50 CHF</p>
                            <span class="float-bottom">1 heure</span>
                            <div class="detail-pricing">
                                <span class="float-left"> <i class="bi bi-check2-circle"></i>Pas de frais de déplacement</span>
                            </div>
                            <a href="#rdv" class="btn btn-secondary mt-5 button-rdv" style="color:#2c6db8;background: white;">Prendre RDV</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 pb-5 pb-lg-0">
                    <div class="wrap-price center-wrap">
                        <div class="price-innerdetail text-center">
                            <h5 style="color:white;">Service à domicile</h5>
                            <p class="prices">70 CHF</p>
                            <span class="float-bottom">1 heure</span>
                            <div class="detail-pricing">
                                <span class="float-left"> <i class="bi bi-check2-circle"></i>Frais de déplacement compris</span>
                            </div>
                            <a href="#rdv" class="btn btn-secondary mt-5 button-rdv" style="color:#20247b;background: white;">Prendre RDV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:2%;text-align:center;">
            <h4 style="color: white;">Pour vous connecter à distance, téléchargez :</h4><br>
            <a href="https://www.teamviewer.com/fr/telecharger/windows/">
                <img style="height:75px;" src="{{ asset('img/TeamViewer.png') }}">
            </a>
            <br><br><br><br>
        </div>
      </section>
    </div>

    <!-- RDV -->
    <section style="margin-top:4%;"class="Material-contact-section section-padding section-dark">
        <h1 class="underline-title" id="rdv" >Prise de rendez-vous</h1>
        <p style="margin-top: 1%;text-align:center;">Merci de prendre un rendez-vous à l'aide du formulaire ou via mes réseaux sociaux</p>
          <div class="container" style="margin-bottom:5%;">
              <div class="row">
                  <!-- contact form -->
                  <div class="wow animated fadeInRight" data-wow-delay=".2s">
                      <form action="https://formspree.io/f/mgeqrewo" method="POST">
                          <!-- Name -->
                          <div class="form-group label-floating">
                            <label class="control-label" for="name">Prénom / Nom</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="Gabriel Rossi" required>
                          </div>
                          <!-- email -->
                          <div style="margin-top: 2%;" class="form-group label-floating">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" placeholder="big.r.informatique@gmail.com" required>
                          </div>

                          <!-- tel -->
                          <div style="margin-top: 2%;" class="form-group label-floating">
                            <label class="control-label" for="tel">Numéro de téléphone</label>
                            <input class="form-control" id="tel" type="tel" name="tel" placeholder="078 823 78 XX" required>
                          </div>

                          <!-- SELECT -->
                          <div style="margin-top: 2%;" class="form-group">
                            <label for="select-formule">Formules tarifs</label>
                            <select class="form-control" id="select-formule" name="formule-prix" onclick="changeFunc()" required>
                              <option selected></option>
                              <option value="50-CHF-distance">50 CHF - à distance</option>
                              <option value="70-CHF-domicile">70 CHF - à domicile</option>
                            </select>
                          </div>

                          <!-- Adresse -->
                          <div style="margin-top: 2%; display:none;" class="form-group label-floating" id="adresse">
                            <label class="control-label" for="adresse">Adresse complète</label>
                            <input class="form-control" id="adresse" type="text" name="Adresse" placeholder="Chemin de Big 5, 1030 Bussigny">
                          </div>

                          <!-- Subject -->
                          <div style="margin-top: 2%;" class="form-group label-floating">
                            <label class="control-label" for="msg_subject">Sujet</label>
                            <input class="form-control" id="msg_subject" type="text" name="sujet" placeholder="Problème avec mon logiciel Word" required>
                          </div>

                          <!-- Message -->
                          <div style="margin-top: 2%;" class="form-group label-floating">
                              <label for="message" class="control-label">Message</label>
                              <textarea class="form-control" rows="3" id="message" name="message" placeholder="Explication de la demande ou du problème" required></textarea>
                          </div>

                          <!-- Form Submit -->
                          <div class="form-submit mt-5">
                              <button style="background:#2c6db8;color:white;width:100%;"class="btn btn-common" type="submit">Envoyer</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
    </section>

    <!-- RESEAUX -->
    <section id="contact rdv" style="margin-top: 3%;" id="reseaux">
      <div class="container">
          <h2 class="text-center text-uppercase underline-title">Mes réseaux sociaux</h2>
          <div class="row-icon">
            <div class="col-sm-12 col-lg-3 my-5 row-icon-size">
              <div class="card border-0">
              <a style="text-decoration:none;"href="#">
                  <div class="card-body text-center bg-color-div">
                      <i class="fab fa-facebook fa-3x mb-3" aria-hidden="true"></i>
                      <h4 class="text-uppercase mb-5">Facebook</h4>
                  </div>
                  </a>
              </div>
            </div>
            <div class="col-sm-12 col-lg-3 my-5 row-icon-size">
              <div class="card border-0">
              <a style="text-decoration:none;"href="#">
                <div class="card-body text-center bg-color-div">
                  <i class="fab fa-instagram fa-3x mb-3" aria-hidden="true"></i>
                  <h4 class="text-uppercase mb-5">Instagram</h4>
                </div>
              </a>
              </div>
            </div>
            <div class="col-sm-12 col-lg-3 my-5 row-icon-size">
              <div class="card border-0">
              <a style="text-decoration:none;"href="#">
                <div class="card-body text-center bg-color-div">
                  <i class="fa fa-map-marker fa-3x mb-3" aria-hidden="true"></i>
                  <h4 class="text-uppercase mb-5">~Bussigny, VD</h4>
                </div>
              </a>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
@endsection
