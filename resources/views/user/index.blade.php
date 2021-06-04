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
      <li><a class="a_module nav_link" href="#info" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-home"></i>A propos</a></li>
      <li><a class="a_module nav_link" href="#gratuite" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-user-graduate"></i>Formation Gratuite</a></li>
      <li><a class="a_module nav_link" href="#payante" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-graduation-cap"></i>Formation Payante</a></li>
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
      <li><a class="a_module nav_link" href="#contact_form" style="color: #fff;font-weight:700;width:100%;font-size:14px"><i class="fa fa-envelope"></i>Contactez-nous</a></li>
    </ul>
    
  </nav>
  <br><br>

        <h1 class="feature-title2" id="info">Qui sommes nous ?</h1>
   <div class="row section">
        <div class="col-md-12">
          <p class="text text-justify text-default">
            EMPRO « Un élève, Un métier, Une profession » est une structure de formation en informatique créer le 26 juin 2018. Son objectif principal est de Mettre en œuvre un dispositif de « deuxième chance »  pour permettre  aux jeunes qui sont en déperditions scolaire de pouvoir se réintégré dans le système  éducatifs.
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

          <h1 class="feature-title2" id="gratuite">Formation Gratuite</h1>
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
              <a class="a_lien" href="{{ route('gratuit.index') }}">
              <p style="text-align: center;padding:10px;border:1px solid #394d6e;margin-top:20px;font-weight:600;background-color:#394d6e;border-radius:8px;color:#fff">
                  S'inscrire pour la formation gratuite
                </p>
              </a>
        </div>
      </div> 

        <h1 class="feature-title2" id="payante">Formation Payante</h1>
            <div class="row section">

              <div class="col-md-12" style="margin-bottom: 30px;">
                  <div class="row">
                    <div class="col-md-4">
                      <img style="width: 100%;" src="{{ asset('user/images/payante.jpeg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                      <p class="text text-default">
                        Nous offrons differents modules de formation payante accessible pour tout le monde.En effet nous EMPRO avons opter d'aider nos apprenants d'accroitre leurs competences de l'informatique par domaine. <br> Ainsi nos apprenants sont specialiser dès le debut de leurs formation. <br> Nous povons citer (l'initiation a 'informatique,la bureautique,le developpement web/cms,le multimedia,la maintenace,les fondamentaux du reseau,la programmation web)
                      </p>
                    </div>
                  </div>
              </div>
              <br>
              
              <!-- <div class="col-md-12" >
                 
                  <div class="feature rounded-icon" style="margin-top: 30px;">
                    <div class="feature-icon"><i class="fa fa-laptop"></i></div>
                    <h3 class="feature-title text-default"><a class="a_module" href="{{ route('user.initiation.index') }}">Initiation en informatique</a> </h3>
                    <p class="text-default text-justify" >
                      <span style="font-weight:500;">Les bases de l’informatique (Ordinateur, Windows, Email, Internet).</span><br>
                      L’ordinateur est aujourd’hui totalement intégré au poste de travail, au point d’être devenu indispensable. Prendre le temps de se former à cet outil informatique, c’est gagner chaque jour en productivité et en confort. Cette formation d’initiation à l’informatique vous permettra d’acquérir les bons réflexes pour exploiter au mieux votre ordinateur et découvrir les fonctions de base des principaux logiciels.
                                          </p>
                    <a href="{{ route('user.initiation.index') }}" >
                      <p class="p_module">
                        S'inscrire pour cette formation
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
                      <p class="p_module">  S'inscrire pour cette formation</p>
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
                          S'inscrire pour cette formation
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
                         S'inscrire pour cette formation
                    </p>
                  </a>
								</div>

              </div> -->

              <div class="col-md-12" style="margin-top: 20px;">
                <div class="row row_module">
                  <div class="col-md-6 ">
                    <div class="col_module">
                      <div class="feature rounded-icon">
                        <div class="feature-icon"><i class="fa fa-laptop"></i></div>
                        <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.initiation.index') }}" >Initiation a l'informatique</a> </h3>
                        <p class="text-default desc_module">
                          Si vous ne connaissez rien à l'informatique, cette formation est faite pour vous. 
                          Faites vos premiers pas et apprenez à utiliser les fonctionnalités essentielles des logiciels rudimentaires.
                        </p>
                        <a href="{{ route('user.initiation.index') }}" >
                          <p class="p_module">S'inscrire pour cette formation</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="col_module">
                      <div class="feature rounded-icon">
                        <div class="feature-icon"><i class="fa fa-file-word"></i></div>
                        <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.bureautique.index') }}" >Bureautique</a> </h3>
                        <p class="text-default desc_module">
                          La maitrise de l'outil informatiques comme la bureautiques est une compétence incontournable de la vie professionnelle.Regler ce probéleme avec notre formation
                        </p>
                        <a  href="{{ route('user.bureautique.index') }}" >
                          <p class="p_module">S'inscrire pour cette formation</p>
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
                      <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.web.index') }}" >Programation Web</a> </h3>
                      <p class="text-default desc_module">
                      Vous voulez apprendre le métier de développeur web ? Devenez un développeur full stack avec notre formation
                      
                      </p>
                      <a href="{{ route('user.web.index') }}" >
                        <p class="p_module">
                          S'inscrire pour cette formation
                        </p>
                      </a>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="col_module">
                      <div class="feature rounded-icon">
                        <div class="feature-icon"><i class="fab fa-wordpress"></i></div>
                        <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.web.create') }}" >Developpememnt Web/cms</a> </h3>
                        <p class="text-default desc_module">
                          Fini le codage pour la realisation d'un site.Créez des sites plus rapidement que jamais avec le créateur de sites WordPress.
                        </p>
                        <a href="{{ route('user.web.create') }}" >
                          <p class="p_module">
                              S'inscrire pour cette formation
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
                        <p class="text-default desc_module">
                        Devenez un technicien de maintenance informatique grâce notre formation.Ce secteur offre de nombreux débouchés en forte croissance.</p>
                        <a href="{{ route('user.maintenance.index') }}" >
                          <p class="p_module">
                            S'inscrire pour cette formation
                          </p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="col_module">
                      <div class="feature rounded-icon">
                      <div class="feature-icon"><i class="fa fa-camera"></i></div>
                      <h3 class="feature-title" style="padding-top: 11px;"><a class="a_module" href="{{ route('user.multimedia.index') }}" >Multimedia</a> </h3>
                      <p class="text-default desc_module">Avis à tous les adeptes de nouvelles technologies, les métiers du multimédia sont faits pour vous ! Découvrez tous les aspects de ce secteur avec <span style="color: #394d6e; font-weight:600;">EMPRO !</span></p>
                      <a href="{{ route('user.multimedia.index') }}" >
                        <p class="p_module">
                            S'inscrire pour cette formation
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
                      <p class="text-default desc_module">Parcourez notre catalogue de formations réseaux et ameliorer vos competeances suivant vos besoins. Formez-vous sur l'administration système : DevOps, Cisco, Supervision, Déploiement.</p>
                      <a href="{{ route('user.reseau.index') }}" >
                        <p class="p_module">
                            S'inscrire pour cette formation
                        </p>
                      </a>
                    </div>
                  </div>
                    
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="feature rounded-icon col_module">
                      <div class="feature-icon"><i class="fa fa-dashboard"></i></div>
                      <h3 class="feature-title"><a class="a_module" href="{{ route('user.base.index') }}" >Base de donnees</a> </h3>
                      <p class="text-default">Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
                      <a href="{{ route('user.base.index') }}" >
                        <p class="p_module">
                            S'inscrire pour cette formation
                        </p>
                      </a>
                    </div>
                  </div> -->
                </div>
              </div>

						</div>
   
  </div>
  @include('user/layouts/sidebare')



</main>


@endsection

@section('footersection')

@endsection