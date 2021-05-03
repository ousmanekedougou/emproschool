@extends('user.layouts.app')

{{-- @section('bg-img',Storage::disk('local')->url($post->image)) --}}

@section('head')

 <link rel="stylesheet" href="{{ asset('css/style2.css') }}"> 

@endsection


@section('main-content')

<main class="main-content">
  <div class="content">
    <!-- .site-header -->

    <div class="banner">
      <img class="img-responsive" src="{{ asset('user/dummy/empro.gif') }}" alt="Banner">
    </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
      @endif

     
  <br>
  <nav class="nav">
    <input class="chk-nav" type="checkbox" id="btn-navbar" />
    <label for="btn-navbar"><i class="fa fa-bars" style="color: #fff;"></i></label>
    
    <ul class="navbar">
      <li><a class="a_module nav_link" href="#info" style="color: #fff;font-weight:700;"><i class="fa fa-home"></i>A propos</a></li>
      <li><a class="a_module nav_link" href="#gratuite" style="color: #fff;font-weight:700;"><i class=""></i>Formation Gratuite</a></li>
      <li><a class="a_module nav_link" href="#payante" style="color: #fff;font-weight:700;"><i class=""></i>Formation Payante</a></li>
      <!-- <li>
          <label class="lbl-nav" for="btn-subnav1">
            <i class="fa fa-graduation-cap"></i>Cursos
          </label>
          <input class="chk-nav" type="checkbox" id="btn-subnav1"/>
        
          <ul class="sub-nav">
            <li><a href="#">Excel básico</a></li>
            <li><a href="#">Diseño web</a></li>
            <li><a href="#">Computación básica</a></li>
            <li><a href="#">Fundamentos de programación</a></li>
          </ul>
                
      </li>
      <li>
          <label class="lbl-nav" for="btn-subnav2">
              <i class="fa fa-info-circle"></i>Nosotros
          </label>
          <input class="chk-nav" type="checkbox" id="btn-subnav2" />
          
          <ul class="sub-nav">
              <li><a href="#una">Historia</a></li>
              <li><a href="#">Servicios</a></li>
          </ul>
      </li> -->
      <li><a class="a_module nav_link" href="#contact_form" style="color: #fff;font-weight:700;"><i class="fa fa-envelope"></i>Contactez-nous</a></li>
    </ul>
    
  </nav>
  <br>

        <h1 class="feature-title2" id="info">Qui sommes nous ?</h1>
   <div class="row section">
        <div class="col-md-12">
          <p class="text text-justify text-default">
          Au regard du niveau d’intérêt que la société accorde aux technologies de l’information et de la communication, on voit nettement que La révolution numérique impacte logiquement les métiers de l’informatique, mais également toutes les activités et tous les secteurs : l’industrie, la finance, le secteur publique, mais également l’agriculture, la santé,
          le transport, les énergies renouvelables et encore l’éducation.
          Créer le 26 juin 2018, EMPRO « Un élève, un métier, une profession » est une structure qui s’investis sur la formation des jeunes pour leurs permettre d’avoir un métier. Le déroulement des cours pour une promotion est estimé à six (4) mois. 
          </p>
        </div>


      <div class="col-md-12">
        <h2 class="feature-title2" >Nos formations</h2>
        <p class="text text-justify text-default">
          En partenariat avec la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureuatique, Multimedia ,Creation de site web ect).
          Vous êtes jeunes ou adultes homme ou femme,vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique.
        </p>
      </div>
        
      </div>
      <!-- <div class="row">
        <div class="col-md-6">
          <h3 class="text-center">OBJECTIFS</h3>
          <ul class="text text-default text-justify" style="margin-left: 15px;">
            <li>S’impliquer au développement du secteur éducatif en valorisant l'éducation et la formation.</li>
            <li>Préparé la jeunesse à la maitrise de l’entreprenariat et de l’emploi dans le milieu professionnelle</li>
            <li>Relancer les jeunes qui sont en déperdition de pouvoir intégré le milieu professionnel</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">FINALITES</h3>
          <ul class="text text-default text-justify" style="margin-left: 15px;">
            <li>Résolution de l’équation un diplôme egale un emploi</li>
            <li>Alternance Ecole et Entreprise</li>
          </ul>
        </div>
      </div> -->

          <h1 class="feature-title2" id="gratuite">La formation gratuite</h1>
      <div class="row section">
        <div class="col-md-12">
          <div class="row ">
            <div class="col-md-8">
              <p class="text text-justify text-default">
                <span style="color: #394d6e; font-weight:600;">EMPRO</span>, en partenariat avec la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureuatique, Multimedia ,Creation de site web ect.. ).
                Vous êtes jeunes ou adultes homme ou femme,vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique en remplissant le formulaire sur le bouton ci après
              </p>
               
            
            </div>
            <div class="col-md-4">
              <img style="width: 100%;" src="{{ asset('user/images/gratuite.jpeg') }}" alt="">
            </div>
          </div>
              <a class="a_lien" href="{{ route('gratuit.index') }}" target="_blank">
              <p style="text-align: center;padding:10px;border:1px solid #394d6e;margin-top:20px;font-weight:600;background-color:#394d6e;border-radius:8px;color:#fff">
                  S'inscrire pour la formation gratuite
                </p>
              </a>
        </div>
      </div> 

        <h1 class="feature-title2" id="payante">Les formations payantes</h1>
            <div class="row section">

              <div class="col-md-12" style="margin-bottom: 30px;">
                  <div class="row">
                    <div class="col-md-4">
                      <img style="width: 100%;" src="{{ asset('user/images/payante.jpeg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                      <p class="text text-justify text-default">
                        Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.
                        Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.
                      </p>
                    </div>
                  </div>
              </div>
              <br>
              
              <div class="col-md-12" >
                 
                 <div class="feature rounded-icon" style="margin-top: 30px;">
                    <div class="feature-icon"><i class="fa fa-laptop"></i></div>
                    <h3 class="feature-title text-default"><a class="a_module" href="{{ route('initiation.index') }}">Initiation en informatique</a> </h3>
                    <p class="text-default" >
                      Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                      Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                      Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    </p>
                    <a href="{{ route('initiation.index') }}" >
                      <p class="p_module">
                        S'inscrire
                      </p>
                    </a>
                  </div>
<hr>
                  <div class="feature rounded-icon" style="margin-top: 30px;">
									<div class="feature-icon"><i class="fa fa-file-text"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.bureautique.index') }}" >Formation Bureautique</a> </h3>
									<p class="text-default">
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                  </p>
                  <a href="{{ route('user.bureautique.index') }}" >
                    <p class="p_module">S'inscrire</p>
                  </a>
								</div>
                <hr>
								<div class="feature rounded-icon" style="margin-top: 30px;">
									<div class="feature-icon"><i class="fa fa-code"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.web.index') }}" >Developpement Web</a> </h3>
									<p class="text-default">
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                  </p>
                  <a href="{{ route('user.web.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>
<hr>
                <div class="feature rounded-icon" style="margin-top: 30px;">
									<div class="feature-icon"><i class="fa fa-dashboard"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.base.index') }}" >Administration des base de donnees</a> </h3>
									<p class="text-default">
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                  </p>
                  <a href="{{ route('user.base.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>

              </div>

							<!-- <div class="col-md-6">
                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-file-text"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.bureautique.index') }}" >Bureautique</a> </h3>
									<p class="text-default">
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                  </p>
                  <a href="{{ route('user.bureautique.index') }}" >
                    <p class="p_module">S'inscrire</p>
                  </a>
								</div>
                
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-code"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.web.index') }}" >Developpememnt Web</a> </h3>
									<p class="text-default">Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                  <a href="{{ route('user.web.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>

               <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-video-camera"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.multimedia.index') }}" >Multimedia</a> </h3>
									<p class="text-default">Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                  <a href="{{ route('user.multimedia.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>

							</div>
							<div class="col-md-6">
                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-cogs"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.maintenance.index') }}" >Maintenance</a></h3>
									<p class="text-default">Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                  <a href="{{ route('user.maintenance.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>

                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-rss-square"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.reseau.index') }}" >Cablage Reseau </a></h3>
									<p class="text-default">Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                  <a href="{{ route('user.reseau.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>

                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-dashboard"></i></div>
									<h3 class="feature-title"><a class="a_module" href="{{ route('user.base.index') }}" >Administration des base de donnees</a> </h3>
									<p class="text-default">Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                  <a href="{{ route('user.base.index') }}" >
                    <p class="p_module">
                        S'inscrire
                    </p>
                  </a>
								</div>

							</div> -->

              <p style="text-align:center;" >

              </p>
						</div>
   
  </div>
  @include('user/layouts/sidebare')



</main>


@endsection

@section('footersection')

@endsection