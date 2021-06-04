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
     <header class=" row site-header" style="text-align:center;">
      <a href="/" class="logo"> <img src="{{ asset('user/images/logo-empro.png') }}" alt=""></a>
      <div class="header-type">
        <p style="text-align:left; margin-top:10px; margin-left:-15px;">Choisissez votre avenir aujourd'hui!</p>
      </div>
    </header> 

     <div class="row">
      <h1>Offre d'une formation gratuite</h1>
      <p>
      </p>
      <form action="{{ route('gratuit.post') }}" method="POST" class="signup-form form-background">
        @csrf
        <div class="form-content">
          <div class="row">
            <p style="font-weight:300;margin-left:15px;">Quel est votre civilité ? <span class="etoile_validation"> *</span></p>
            <div class="col-sm-6" style="display: flex;">
              <span class="radio control">
                <input type="radio" value="1" name="genre" class="@error('genre') is-invalid @enderror" id="femme">
                <label for="femme" style="margin-right: 30px">Femme</label>
              </span>
              <span class="radio control">
                <input type="radio" value="2" class="@error('genre') is-invalid @enderror" name="genre" id="homme">
                <label for="homme">Homme</label>
              </span>
            </div>
            @error('genre')
            <div style="margin-top: 5px;" class="col-sm-12 messege_error">{{ $message }}</div>
            @enderror
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6"><p>
              <label class="input_label" for="nomcomplet">Votre prenom et nom <span class="etoile_validation"> *</span></label>
              <input type="text" name="nomcomplet" value="{{ old('nomcomplet') }}" class="input @error('nomcomplet') is-invalid @enderror" value="{{ old('nomcomplet') }}" placeholder=""></p>
              @error('nomcomplet')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="email">Votre adresse email <span class="etoile_validation"> *</span></label>
              <input type="email" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder=""></p>
              @error('email')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="phone">Votre telephone <span class="etoile_validation"> *</span></label>
            <input type="number" name="phone" class="input @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder=""></p>
              @error('phone')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="adresse">Votre adresse physique <span class="etoile_validation"> *</span></label>
              <input type="text" name="adresse" class="input @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" placeholder=""></p>
              @error('adresse')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
              <label class="input_label" for="date_naissance">Votre date de naissance <span class="etoile_validation"> *</span></label>
              <input type="date" name="date_naissance" class="input @error('date_naissance') is-invalid @enderror" value="{{ old('date_naissance') }}" placeholder=""></p>
              @error('date_naissance')
                <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="lieu_naissance">Votre lieu de naissance <span class="etoile_validation"> *</span></label>
              <input type="text" name="lieu_naissance" class="input @error('lieu_naissance') is-invalid @enderror" value="{{ old('lieu_naissance') }}" placeholder=""></p>
              @error('lieu_naissance')
                <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <h4>Votre Niveau d'etude <span class="etoile_validation"> *</span></h4>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="1" name="niveau" id="Auccun">
                <label for="Auccun">Auccun</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="2" name="niveau" id="BFEM">
                <label for="BFEM">BFEM</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="4" name="niveau" id="CAP/BEP">
                <label for="CAP/BEP">CAP/BEP
                </label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="5" name="niveau" id="BAC">
                <label for="BAC">BAC</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="6" name="niveau" id="BAC+2(DUT/BTS)">
                <label for="BAC+2(DUT/BTS)">BAC+2 (DUT / BTS)</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="7" name="niveau" id="BAC+3">
                <label for="BAC+3">BAC+3</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="8" name="niveau" id="BAC+5">
                <label for="BAC+5">BAC+5</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('niveau') is-invalid @enderror" value="9" name="niveau" id="Autre">
                <label for="Autre">Autre</label>
              </span>
              @error('niveau')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-4">
              <h4>Avez-vous des notions en informatique? <span class="etoile_validation"> *</span></h4>
              <span class="radio control">
                <input type="radio" class="input @error('notion_in') is-invalid @enderror" value="1" name="notion_in" id="oui1">
                <label for="oui1">Oui</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('notion_in') is-invalid @enderror" value="2" name="notion_in" id="non1">
                <label for="non1">Non</label>
              </span>
              @error('notion_in')
                <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-4">
              <h4>Avez-vous un ordinateur <span class="etoile_validation"> *</span></h4>
              <span class="radio control">
                <input type="radio" class="input @error('notion_pro') is-invalid @enderror" value="1" name="notion_pro" id="oui2">
                <label for="oui2">Oui</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('notion_pro') is-invalid @enderror" value="2" name="notion_pro" id="non2">
                <label for="non2">Non</label>
              </span>
              @error('notion_pro')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>

          
           <div class="row">
             <h3 style="margin-left: 15px;">Choisissez votre domaine <span class="etoile_validation"> *</span></h3>

            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="Initiation" name="formation" id="initiation">
                <label for="initiation">Initiation a l'informatique</label>
              </span>
            </div>

            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="Developpement Web" name="formation" id="DeveloppementWeb">
                <label for="DeveloppementWeb">Developpement Web</label>
              </span>
            </div>

            <div class="col-sm-4">
                 <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="Multimedia" name="formation" id="Multimedia">
                <label for="Multimedia">Multimedia</label>
              </span>
            </div>

          

          </div>
          <div class="row" style="margin-top: 10px;">

            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="Bureautique" name="formation" id="Bureautique">
                <label for="Bureautique">Bureautique</label>
              </span>
            </div>

              <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="Programmation Web" name="formation" id="programmation">
                <label for="programmation">Programmation Web</label>
              </span>
            </div>


            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="Maintenance" name="formation" id="maintenance">
                <label for="maintenance">Maintenance</label>
              </span>
            </div>
           
            @error('formation')
                <div class="messege_error" style="margin-top: 10px;">{{ $message }}</div>
            @enderror
          </div> 
        <br>
       
          
          <p style="margin-top: 20px;">
            <input type="submit" value="Valider Votre Candidature">
          </p>
        </div>
      </form>
    </div> 
  </div>
  @include('user/layouts/sidebare')
</main>


@endsection

@section('footersection')
@endsection


