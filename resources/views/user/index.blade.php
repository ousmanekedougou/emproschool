@extends('user.layouts.app')

{{-- @section('bg-img',Storage::disk('local')->url($post->image)) --}}

@section('head')

 <link rel="stylesheet" href="{{ asset('css/style2.css') }}"> 
<style>
   h3 .a_module{
    width: 100%;
    padding: 10px;
    padding-top: 15px;
    }
    .content{
      /* box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px; */
    }
  @media (max-width: 768px) {
   h3 .a_module{
    font-size: 13px;
    width: 100%;
    padding: 10px;
    padding-top: 15px;
    }
    .col_second{
      margin-top: 10px;
    }
  }
</style>
@endsection


@section('main-content')

<main class="main-content">
  <div class="content ">
    <!-- .site-header -->

    <div class="banner">
      <img class="img-responsive" src="{{ asset('user/dummy/empro.gif') }}" alt="Banner">
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success" style="margin-top: 15px;">
        {{ session()->get('success') }}
    </div>
    @endif

     
    <br>
    <nav class="nav" style="width: 97%;margin-left:-18px;">
      <input class="chk-nav" type="checkbox" id="btn-navbar" />
      <label for="btn-navbar"><i class="fa fa-bars" style="color: #fff;"></i></label>
      
      <ul class="navbar">
        <li><a class="a_module nav_link" href="#info" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-home"></i>A propos</a></li>
        <li><a class="a_module nav_link" href="#gratuite" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-user-graduate"></i>Formation Gratuite</a></li>
        <li><a class="a_module nav_link" href="#payante" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-graduation-cap"></i>Formation Payante</a></li>
      
        <li><a class="a_module nav_link" href="#contact_form" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-envelope"></i>Contactez-nous</a></li>
      </ul>
      
    </nav>
    <br><br>

    <h1 class="feature-title2" id="info">Qui sommes nous ?</h1>
    <div class="row section">
      <div class="col-md-12">
        <p class="text text-justify text-default">
          EMPRO « Un élève, Un métier, Une profession » est une structure de formation en informatique créer le 26 juin 2018. Son objectif principal est de Mettre en œuvre un dispositif de « deuxième chance »  pour permettre  aux jeunes qui sont en déperditions scolaire de pouvoir se réintégré dans le système  éducatif.
        </p>
      </div>
    </div>
  

    <h1 class="feature-title2" id="gratuite">La Formation Gratuite</h1>
    <div class="row section">
      <div class="col-md-12">
        <div class="row ">
          <div class="col-md-8">
            <p class="text text-left text-default">
              <span style="color: #394d6e; font-weight:600;">EMPRO</span> en partenariat avec la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureautique, Multimédia, Création de site web etc..).
              Vous êtes jeunes ou adultes homme ou femme, vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique en remplissant le formulaire sur le bouton ci-après
           <br>
              <span style="font-weight: bold; font-size:18px;" class="text-default">La date limite des inscriptions est le 15/01/2022 </span>
            </p>
            
          
          </div>
          <div class="col-md-4">
            <img style="width: 100%;height:100%" src="{{ asset('user/images/gratuite.jpeg') }}" alt="">
          </div>
        </div>
            <a class="a_lien" href="{{ route('gratuit.index') }}">
            <p class="formatio_gratuit" >
                S'inscrire pour la formation gratuite
              </p>
            </a>
      </div>
    </div> 

    <h1 class="feature-title2" id="payante">La Formation Payante</h1>
    <div class="row section">
      <div class="col-md-12" style="margin-bottom: 30px;">
          <div class="row">
            <div class="col-md-4">
              <img style="width: 100%;" src="{{ asset('user/images/payante.jpeg') }}" alt="">
            </div>
            <div class="col-md-8">
              <p class="text text-default text-left">
                Nous offrons différents modules de formation payante accessible pour tout le monde. En effet nous EMPRO avons opter d'aider nos apprenants d'accroitre leurs compétences de l'informatique par domaine (Initiation a l'informatique, la bureautique, Développement web, le multimédia, la maintenance, le Cms WordPress et le réseau informatique). <br> 
                <span style="font-weight: bold; font-size:18px;" class="text-default">La date limite des inscriptions est le 15/12/2021 </span>
              </p>
            </div>
          </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-md-12" style="margin-top:20px;">
        <div class="row row_module">
          <div class="col-md-6 ">
            <div class="col_module">
              <div class="feature rounded-icon">
                <div class="feature-icon"><i class="fa fa-laptop"></i></div>
                <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.initiation.index') }}" >Initiation a l'informatique</a> </h3>
                <p class="text-default desc_module text-left">
                  Si vous ne connaissez rien à l'informatique, cette formation est faite pour vous. 
                  Faites vos premiers pas et apprenez à utiliser les fonctionnalités éssentiélles des logiciéls rudimentaires.
                </p>
                <p class="text-default formation_module btn-empro">
                  <span class="form_ins">Inscription:15.000 pour un mois</span>
                </p>
                <a href="{{ route('user.initiation.index') }}" >
                  <p class="text-default formation_module btn-empro2">
                    S'inscrire
                </p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col_second">
            <div class="col_module">
              <div class="feature rounded-icon">
                <div class="feature-icon"><i class="fa fa-file-word"></i></div>
                <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.bureautique.index') }}" >Bureautique</a> </h3>
                <p class="text-default desc_module text-left">
                  La maitrise de l'outil informatique comme les bureautiques est une compétence incontournable de la vie professionnelle. Régler ce problème avec notre formation
                </p>
                  <p class="text-default formation_module btn-empro">
                  <span class="form_ins">Inscription:15.000f </span>/
                  <span class="form_m">Mensualite:10.000f</span>
                </p>
                <a  href="{{ route('user.bureautique.index') }}" >
                  <p class="text-default formation_module btn-empro2">
                    S'inscrire
                </p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row row_module">
          <div class="col-md-6 ">
            <div class="col_module">
                <div class="feature rounded-icon">
              <div class="feature-icon"><i class="fa fa-code"></i></div>
              <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.web.index') }}" >Developpement Web</a> </h3>
              <p class="text-default desc_module text-left">
              Vous voulez apprendre le métier de développeur web ? Devenez un développeur full stack avec notre formation
              
              </p>
                <p class="text-default formation_module btn-empro">
                  <span class="form_ins">Inscription:20.000f </span>/
                  <span class="form_m">Mensualite:15.000f</span>
                </p>
              <a href="{{ route('user.web.index') }}" >
                <p class="text-default formation_module btn-empro2">
                    S'inscrire
                </p>
              </a>
            </div>
            </div>
          </div>
          <div class="col-md-6 col_second">
            <div class="col_module">
              <div class="feature rounded-icon">
                <div class="feature-icon"><i class="fab fa-wordpress"></i></div>
                <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.web.create') }}" >Le cms wordpress</a> </h3>
                <p class="text-default desc_module text-left">
                  Fini le codage pour la réalisation d'un site. Créez des sites plus rapidement que jamais avec le créateur de sites WordPress.
                </p>
                  <p class="text-default formation_module btn-empro">
                  <span class="form_ins">Inscription:15.000f </span>/
                  <span class="form_m">Mensualite:10.000f</span>
                </p>
                <a href="{{ route('user.web.create') }}" >
                  <p class="text-default formation_module btn-empro2">
                    S'inscrire
                </p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row row_module">
          <div class="col-md-6 ">
            <div class="col_module">
              <div class="feature rounded-icon">
                <div class="feature-icon"><i class="fa fa-cogs"></i></div>
                <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.maintenance.index') }}" >Technique De Maintenance</a></h3>
                <p class="text-default desc_module text-left">
                Devenez un téchnicien de maintenance informatique grâce notre formation. Ce secteur offre de nombreux débouchés en forte croissance.</p>
                  <p class="text-default formation_module btn-empro">
                  <span class="form_ins">Inscription:15.000f </span>/
                  <span class="form_m">Mensualite:10.000f</span>
                </p>
                <a href="{{ route('user.maintenance.index') }}" >
                  <p class="text-default formation_module btn-empro2">
                    S'inscrire
                </p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col_second">
            <div class="col_module">
              <div class="feature rounded-icon">
              <div class="feature-icon"><i class="fa fa-camera"></i></div>
              <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.multimedia.index') }}" >Multimedia</a> </h3>
              <p class="text-default desc_module text-left">Avis à tous les adeptes de nouvelles technologies, les métiers du multimédia sont faits pour vous ! Découvrez tous les aspects de ce secteur avec <span style="color: #394d6e; font-weight:600;">EMPRO !</span>
              </p>
                <p class="text-default formation_module btn-empro">
                  <span class="form_ins">Inscription:20.000f </span>/
                  <span class="form_m">Mensualite:15.000f</span>
                </p>
              <a href="{{ route('user.multimedia.index') }}" >
                <p class="text-default formation_module btn-empro2">
                    S'inscrire
                </p>
              </a>
            </div>
            </div>
          </div>
        </div>

        <div class="row row_module">
          <div class="col-md-6 ">
            <div class="col_module">
              <div class="feature rounded-icon ">
                <div class="feature-icon"><i class="fa fa-rss-square"></i></div>
                <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.reseau.index') }}" >Fondamentaux du Reseau </a></h3>
                <p class="text-default desc_module text-left">Parcourez notre catalogue de formations réseaux et améliorer vos compétences suivant vos besoins. Formez-vous sur l'administration système : DevOps, Cisco, Supervision, Déploiement.

                </p>
                  <p class="text-default formation_module btn-empro ">
                    <span class="form_ins">Inscription:15.000f </span>/
                    <span class="form_m">Mensualite:10.000f</span>
                  </p>
                <a href="{{ route('user.reseau.index') }}" >
                  <p class="text-default formation_module btn-empro2">
                      S'inscrire
                  </p>
                </a>
              </div>
            </div>
            
          </div>
          <div class="col-md-6 col_second">
            <div class="col_module">
              <div class="feature rounded-icon ">
                <div class="feature-icon"><i class="fa fa-people-arrows"></i></div>
                <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.base.index') }}" >Développement personnel </a></h3>
                <p class="text-default desc_module text-left">
                    Activez-vous à vous connaitre mieux, valorisez vos potentiels et talents, améliorez votre qualité de vie humaine pour la réalisation de vos aspirations et rêves
                </p>
                  <p class="text-default formation_module btn-empro ">
                    <span class="form_ins">Inscription:10.000f </span>/
                    <span class="form_m">Mensualite:10.000f</span>
                  </p>
                <a href="{{ route('user.base.index') }}" >
                  <p class="text-default formation_module btn-empro2">
                      S'inscrire
                  </p>
                </a>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </div>
   
  </div>
  @include('user/layouts/sidebare')



</main>


@endsection

@section('footersection')

@endsection