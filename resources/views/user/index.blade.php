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
        <h1 class="text-center">Qui sommes nous ?</h1>
        <div class="col-md-6">
          <p class="text text-justify text-default">École 221 est une école de formation supérieure en Informatique. Son approche pédagogique diffère des autres écoles de formation actuelles au Sénégal. L’école combine une pédagogie magistrale et une pédagogie active basée sur une approche par compétence où l’apprenant est au centre de sa formation. Il va acquérir des compétences en s’exerçant sur des projets réels qui simulent l’environnement d’entreprise.</p>
        </div>
        <div class="col-md-6">
          <p class="text text-justify text-default">Rejoindre l’École 221, c’est rejoindre une école informatique  de passionnés, autant par la technique des métiers et leurs possibilités que par les nombreux secteurs où ils s’exercent. C’est aussi plonger au cœur d’un univers où l’on parle infrastructure, web,mobile , SQL, DevOps,UI,UX,Motion design et bien d’autres…</p>
        </div>
      </div>

    <div class="row">
      <div class="col-md-12">
        <h2 class="feature-title2 text-center">NOS FORMATIONS</h2>
        <p class="text text-justify text-default">
          <span style="color: #394d6e; font-weight:600;">EMPRO</span>, en collaboration avec son partenaire la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureuatique, Multimedia ,Creation de site web ect.. ).
          Vous êtes jeunes ou adultes homme ou femme,vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique en remplissant le formulaire sur le bouton ci après
        </p>
      </div>
    </div>

 <hr>
      <div class="row">
        <div class="col-md-12">
          <h2 class="feature-title2 text-center">FORMATIONS GRATUITE</h2>
          <div class="row">
            <div class="col-md-8">
              <p class="text text-justify text-default">
                <span style="color: #394d6e; font-weight:600;">EMPRO</span>, en collaboration avec son partenaire la mairie de la commune de Biscuiterie, vous offre des formations gratuites en Informatique sur plusieurs domaines en (Bureuatique, Multimedia ,Creation de site web ect.. ).
                Vous êtes jeunes ou adultes homme ou femme,vous voulez développer vos aptitudes professionnelles pour trouver plus facilement un emploi, inscrivez-vous à nos sessions de formation en informatique en remplissant le formulaire sur le bouton ci après
              </p>
               
              <p  class="text-center" >
                <a class="a_lien" href="{{ route('gratuit.index') }}" target="_blank">S'inscrire pour la formation gratuite</a>
              </p>
            </div>
            <div class="col-md-4">
              <img style="width: 100%;" src="{{ asset('user/images/gratuite.jpeg') }}" alt="">
            </div>
           
          </div>
        </div>
      </div>

<hr>
    <div class="features">
        <h2 class="feature-title text-center">FORMATIONS PAYANTES</h2>
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

    

            <div class="row" style="margin-top:30px ;">
              
              <div class="col-md-12">
                 <a href="{{ route('confirmer.index') }}">
                 <div class="feature rounded-icon">
                    <div class="feature-icon"><i class="fa fa-file-text"></i></div>
                    <h3 class="feature-title">Initiation en informatique </h3>
                    <p>
                      Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                      Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                      Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                    </p>
                  </div>
                 </a>
              </div>
							<div class="col-md-6">

								<a href="{{ route('confirmer.index') }}">
                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-file-text"></i></div>
									<h3 class="feature-title">Bureautique </h3>
									<p>
                    Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.
                  </p>
								</div>
                </a>

                <a href="{{ route('confirmer.index') }}">
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-code"></i></div>
									<h3 class="feature-title">Developpememnt Web </h3>
									<p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
								</div>
                </a>

               <a href="{{ route('confirmer.index') }}">
               <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-video-camera"></i></div>
									<h3 class="feature-title">Multimedia </h3>
									<p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
								</div>
               </a>

							</div>
							<div class="col-md-6">
							<a href="{{ route('confirmer.index') }}">
                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-cogs"></i></div>
									<h3 class="feature-title">Maintenance</h3>
									<p>Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
								</div>
              </a>

								<a href="{{ route('confirmer.index') }}">
                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-rss-square"></i></div>
									<h3 class="feature-title">Cablage Reseau </h3>
									<p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
								</div>
                </a>

                <a href="{{ route('confirmer.index') }}">
                <div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-dashboard"></i></div>
									<h3 class="feature-title">Administration des base de donnees </h3>
									<p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
								</div>
                </a>

							</div>
              <p style="text-align:center;" >
              <!-- <a class="a_lien" href="{{ route('confirmer.index') }}" target="_blank">S'inscrire pour la formation d'autres modules</a> -->
              </p>
						</div>
  </div>
  @include('user/layouts/sidebare')
</main>


@endsection

@section('footersection')
@endsection