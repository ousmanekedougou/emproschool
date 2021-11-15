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
      <header class="row header_empro" style="text-align:center;">
      <div class="col-sm-3 page_empro"><a href="/" class="logo"> <img src="{{ asset('user/images/logo-empro.png') }}" alt=""></a></div>
      <div class="col-sm-9 page_empro">
         <h1 class="h1_page">FORMATION D'INITIATION A L'INFORMATIQUE</h1>
      </div>
    </header> 

     <div class="row">
      <p class="text_description">
        <strong>Public visé (pour qui) : </strong>  Débutants en informatique.
      </p>
      <p class="text_description">
        <strong>Objectifs : </strong>
        Apprendre à utiliser un ordinateur, son environnement. Savoir utiliser les fonctions essentielles de Windows. Apprendre les fonctions de base et les logiciels essentiels de la bureautique : Word, Excel et PowerPoint. Travailler avec Internet et les E-mails.
      </p>
      <p class="text_description">
        <strong>Prérequis : </strong>  Cette formation de demande pas de prérequis.
      </p>
      <p class="text_description">
        <strong>Finalité : </strong>
        Acquérir les connaissances de base en informatique 
      </p>
      <form action="{{ route('user.initiation.post') }}" method="POST" class="signup-form form-background">
        @csrf
        <div class="form-content">
          <div class="row">
            <p style=" font-weight:300;margin-left:15px;">Quel est votre civilité ? <span class="etoile_validation"> *</span></p>
            <div class="col-sm-6" style="display: flex;">
              <span class="radio control">
                <input required type="radio" value="1" name="genre" class="@error('genre') is-invalid @enderror" id="femme">
                <label for="femme" style="margin-right: 30px">Femme</label>
              </span>
              <span class="radio control">
                <input required type="radio" value="2" class="@error('genre') is-invalid @enderror" name="genre" id="homme">
                <label for="homme">Homme</label>
              </span>
            </div>
              @error('genre')
              <div style="margin-top: 5px;" class="col-sm-12 messege_error">{{ $message }}</div>
              @enderror
          </div>
          <div class="row">
            <div class="col-sm-6"><p>
              <label class="input_label" for="nomcomplet">Votre prenom et nom <span class="etoile_validation"> *</span></label>
              <input required type="text" name="nomcomplet" id="nomcomplet" value="{{ old('nomcomplet') }}" class="input @error('nomcomplet') is-invalid @enderror" value="{{ old('nomcomplet') }}" placeholder=""></p>
              @error('nomcomplet')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="email">Votre adresse email <span class="etoile_validation"> *</span></label>
              <input required type="email" name="email"  id="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder=""></p>
              @error('email')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="phone">Votre telephone <span class="etoile_validation"> *</span></label>
              <input required type="number" name="phone" id="phone" class="input @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder=""></p>
              @error('phone')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="adresse">Votre adresse physique <span class="etoile_validation"> *</span></label>
              <input required type="text" name="adresse" id="adresse" class="input @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" placeholder=""></p>
              @error('adresse')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="date_naissance">Votre date de naissance <span class="etoile_validation"> *</span></label>
              <input required type="date" id="date_naissance" name="date_naissance" class="input @error('date_naissance') is-invalid @enderror" value="{{ old('date_naissance') }}" placeholder=""></p>
              @error('date_naissance')
                <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" id="lieu_naissance" for="lieu_naissance">Votre lieu de naissance <span class="etoile_validation"> *</span></label>
              <input required type="text" name="lieu_naissance" class="input @error('lieu_naissance') is-invalid @enderror" value="{{ old('lieu_naissance') }}" placeholder=""></p>
              @error('lieu_naissance')
                <div class="messege_error" style="margin-top: 10px;">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <p>
            <strong> INFORMATION : </strong> Apres avoire valider votre inscription le payment de la formation se fera en presentielle.Nous siegeons a l'ecole Biscuiterie pres du marche nguelaw dans la commune de Biscuiterie.
          </p>

          <br>
          
          <p>
            <input type="submit" value="Valider Votre Candidature">
          </p>
        </div>
      </form>
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


