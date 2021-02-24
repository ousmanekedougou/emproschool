@extends('user.layouts.app')

{{-- @section('bg-img',Storage::disk('local')->url($post->image)) --}}

@section('head')
{{-- <link rel="stylesheet" href="{{ asset('user/css/prism.css') }}"> --}}
@endsection

{{-- @section('title',$post->title)

@section('sub-heding',$post->subtitle) --}}

@section('main-content')

<main class="main-content">
  <div class="content">
     {{-- <header class="site-header">
      <a href="/" class="logo"><img style="width: 100% auto;margin-top:20px;" src="{{ asset('user/images/logo-empro.png') }}" alt=""></a>
      <div class="header-type">
        <h1>Choisissez votre avenir aujourd'hui!</h1>
        <p>Text de Motivation</p>
      </div> 
    </header>  --}}
   
    <!-- .site-header -->

    <div class="banner">
      <img class="img-responsive" src="{{ asset('user/dummy/empro.gif') }}" alt="Banner">
    </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
      @endif

      <div class="row">
        <div class="col-md-6">
          <h1>Qui sommes nous ?</h1>
          <p class="text text-justify text-default">École 221 est une école de formation supérieure en Informatique. Son approche pédagogique diffère des autres écoles de formation actuelles au Sénégal. L’école combine une pédagogie magistrale et une pédagogie active basée sur une approche par compétence où l’apprenant est au centre de sa formation. Il va acquérir des compétences en s’exerçant sur des projets réels qui simulent l’environnement d’entreprise.</p>
        </div>
        <div class="col-md-6">
          <h1>Pourquoi rejoindre empro?</h1>
          <p class="text text-justify text-default">Rejoindre l’École 221, c’est rejoindre une école informatique  de passionnés, autant par la technique des métiers et leurs possibilités que par les nombreux secteurs où ils s’exercent. C’est aussi plonger au cœur d’un univers où l’on parle infrastructure, web,mobile , SQL, DevOps,UI,UX,Motion design et bien d’autres…</p>
        </div>
      </div>


    {{-- <div class="row">
      <h1 class="btn btn-primary ">Offre d'une formation gratuite</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vitae.
      </p>
      <form action="#" class="signup-form">
        
        <div class="form-content">
          <p><input type="text" placeholder="Prenom et Nom"></p>
          <p><input type="text" placeholder="Votre Adresse E-mail"></p>
          <p><input type="text" placeholder="Votre Numero de Telephone"></p>
          <p>
            <input type="text" placeholder="Votre Adresse Physique">
          </p>
          <p>
            <span class="select control">
              <select name="" id="">
                <option value="#">Choisissez Votre Formation</option>
                <option value="#"></option>
                <option value="#"></option>
              </select>
            </span>
          </p>
          
          <p>
            <input type="submit" value="Valider Votre Candidature">
          </p>
        </div>
      </form>
    </div> --}}
    <div class="row">
      <div class="col-md-12">
        <h2 class="feature-title2 text-center">Service de formation en informatique</h2>
        <p class="text text-justify text-default">
          <span style="color: #394d6e; font-weight:600;">EMPRO</span>, en collaboration avec son partenaire la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureuatique, Multimedia ,Creation de site web ect.. ).
          Vous êtes jeunes ou adultes homme ou femme,vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique en remplissant le formulaire sur le bouton ci après
        </p>
      </div>
    </div>

 <hr>
      <div class="row">
        <div class="col-md-12">
          <h2 class="feature-title2">ENPRO lance une offre de formation gratuite en informatique</h2>
          <div class="row">
            <div class="col-md-8">
              <p class="text text-justify text-default">
                <span style="color: #394d6e; font-weight:600;">EMPRO</span>, en collaboration avec son partenaire la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureuatique, Multimedia ,Creation de site web ect.. ).
                Vous êtes jeunes ou adultes homme ou femme,vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique en remplissant le formulaire sur le bouton ci après
              </p>
               
              <p  class="text-left" >
                <a class="a_lien" href="{{ route('gratuit.index') }}" target="_blank">S'inscrire pour la formation gratuite</a>
              </p>
            </div>
            <div class="col-md-4">
              <img style="width: 100%;" src="{{ asset('user/images/gratuite.jpeg') }}" alt="">
            </div>
           
          </div>
        </div>
      </div>


    {{-- <div class="row">
      <h2>Nos offres de formation gratuites</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis atque vel dolores eum odio sunt optio quas ut amet quia.</p>
      <p  style="text-align: center" >
        <a style="text-align: center;background-color:blue;padding:15px;color:white;border-radius:5px;outline:none;font-weight:700;" href="{{ route('gratuit.index') }}" target="_blank">Postulez Maintenant</a>
      </p>
    </div> --}}
<hr>
    <div class="features">
        <h2 class="feature-title text-center">Nos formation payantes</h2>
        <p class="text text-justify text-default">Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
        <h3 class="text-center">Une Formation d'initiation a l'informatique</h3>
        <div class="row">
          <div class="col-md-4">
            <img style="width: 100%;" src="{{ asset('user/images/payante.jpeg') }}" alt="">
            <img style="width: 100%;" src="{{ asset('user/images/payante.jpeg') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="text text-justify text-default"> <span style="color: #394d6e; font-weight:530;">Le publique vise : </span> pour cette formation sont les debutants qui n'ont auccune notion en informatique
            </p>
            <p class="text text-justify text-default"> <span style="color: #394d6e; font-weight:530;">Objectifs : </span> 
            Cours d'initiation simple et pratique d'initiation à l'informatique et aux outils Internet : découverte
            de l'informatique et familiarisation avec un ordinateur, connexion, navigation, courrier électronique,
            téléchargement de logiciels et transfert de fichiers texte et image, découverte des réseaux sociaux.
            </p>
            <p class="text text-justify text-default">
              <span style="color: #394d6e; font-weight:530;">Methode pedagogique : </span>
              Un poste de travail par stagiaire,
              Vidéoprojecteur,
              Accès Internet,
              Exercices individuels sur PC,
              Supports de cours,
              Mise en application des logiciels,
              Évaluationen fin de formation,
              Attestation de formation.
            </p>
            <p  class="text-left" >
              <a class="a_lien" href="{{ route('initiation.index') }}" target="_blank">S'inscrire pour la formation initiale payante</a>
            </p>
          </div>
        </div>
     
<hr>
   
          <div class="row" style="padding: 10px;">
            <h3 class="feature-title2">Choisissez votre specialite en informatique</h3>
            <p class="text text-justify text-default" >Vous apprendrez les compétences clés de votre futur métier en réalisant des projets tirés de    cas concrets de la vie en entreprise.
              Au-delà des cours en accès libre, nos parcours vous permettent d’apprendre par la pratique. Vous gagnerez donc un véritable savoir-faire ainsi qu’un portfolio ou Github pour le démontrer.
            </p>
            <div class="row">
              <div class="col-md-4 ">
                <div class="card-module">
                  <div class="card-img"><img  src="{{ asset('user/images/icon-word.png') }}" alt=""></div>
                  <p>Bureautique</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-module">
                  <div class="card-img"><img style="margin-top: 10px;"  src="{{ asset('user/images/icone-web.png') }}" alt=""></div>
                  <p>Developpement web</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-module">
                  <div class="card-img"><img  src="{{ asset('user/images/icone-mult.png') }}" alt=""></div>
                  <p>Multimedia</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="card-module">
                  <div class="card-img"><img  src="{{ asset('user/images/maintenance.png') }}" alt=""></div>
                  <p>Maintenance</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-module">
                  <div class="card-img"><img  src="{{ asset('user/images/icon-reseau.png') }}" alt=""></div>
                  <p>Reseau</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-module">
                  <div class="card-img"><img  src="{{ asset('user/images/icon-database.png') }}" alt=""></div>
                  <p>Base de donnes</p>
                </div>
              </div>
            </div>
            <br>
            <p style="text-align:center;" >
              <a class="a_lien" href="{{ route('confirmer.index') }}" target="_blank">S'inscrire pour la formation d'autres modules</a>
            </p>
          </div>
        
     
    </div>

    

    {{-- <div class="features">
      <h1 class="btn btn-primary ">Nos Formations Payantes</h1>
      <div class="feature">
        <div class="feature-icon large"><i class="icon-archive"></i></div>
        <h2 class="feature-title">Developpement Wep & Mobile</h2>
        <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
      </div>
      <div class="feature">
        <div class="feature-icon large"><i class="icon-book"></i></div>
        <h2 class="feature-title">Multimediat</h2>
        <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
      </div>
      <div class="feature">
        <div class="feature-icon large"><i class="icon-badge"></i></div>
        <h2 class="feature-title">Maintenance & Cablage Reseau</h2>
        <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
      </div>
      <div class="feature">
        <div class="feature-icon large"><i class="icon-badge"></i></div>
        <h2 class="feature-title">Bureautique</h2>
        <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
      </div>
      <div class="feature">
        <div class="feature-icon large"><i class="icon-badge"></i></div>
        <h2 class="feature-title">Developpement Personnel & Entreprenariat</h2>
        <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
      </div>
    </div> --}}
  </div>
  @include('user/layouts/sidebare')
</main>


@endsection

@section('footersection')
@endsection