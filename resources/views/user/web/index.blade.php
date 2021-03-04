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
    <header class="site-header">
      <a href="/" class="logo"><img src="{{ asset('user/images/logo-empro.png') }}" alt=""></a>
      <div class="header-type">
        <h1>Choisissez votre avenir aujourd'hui!</h1>
        <p>Text de Motivation</p>
      </div>
    </header> 

     <div class="row">
      <h1>FORMATION EN DEVELOPPEMENT WEB</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vitae.
      </p>
      <form action="{{ route('web.post') }}" method="POST" class="signup-form .form-background">
        @csrf
        <div class="form-content">
          <div class="row">
            <p style="font-weight:300;margin-left:15px;">Quel est votre civilité ?</p>
            <div class="col-sm-6" style="display: flex;margin-bottom:5px;">
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
            <div class="col-md-12 messege_error" >{{ $message }}</div>
            @enderror
          </div>
              
          <br>
          <div class="row">
            <div class="col-sm-6">
              <p>
                <label class="input_label" for="nomcomplet">Votre prenom et complet</label>
                <input type="text" name="nomcomplet" id="nomcomplet" class="input @error('nomcomplet') is-invalid @enderror" value="{{ old('nomcomplet') }}" placeholder="">
                @error('nomcomplet')
                <div class="messege_error">{{ $message }}</div>
                @enderror
              </p>
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="email">Votre adresse email</label>
              <input type="email" id="email" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="">
              @error('email')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="phone">Votre telephone</label>
              <input type="number" id="phone" name="phone" class="input @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="">
              @error('phone')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="adresse">Votre adresse physique</label>
              <input type="text" id="adresse" name="adresse" class="input @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" placeholder="">
              @error('adresse')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="date_naissance">Votre date de naissance</label>
              <input type="date" id="date_naissance" name="date_naissance" class="input @error('date_naissance') is-invalid @enderror" value="{{ old('date_naissance') }}" placeholder="">
              @error('date_naissance')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="lieu_naissance">Votre lieu de naissance</label>
              <input type="text" id="lieu_naissance" name="lieu_naissance" class="input @error('lieu_naissance') is-invalid @enderror" value="{{ old('lieu_naissance') }}" placeholder="">
              @error('lieu_naissance')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-4">
              <h4>Votre Niveau d'etude</h4>
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
              <h4>Avez Vous Des Connaissance en informatique?</h4>
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
              <h4>Avez Vous Des Connaissance Programation web</h4>
              <span class="radio control">
                <input type="radio" class="input @error('notion_pro') is-invalid @enderror" value="3" name="notion_pro" id="oui2">
                <label for="oui2">Oui</label>
              </span>
              <span class="radio control">
                <input type="radio" class="input @error('notion_pro') is-invalid @enderror" value="4" name="notion_pro" id="non2">
                <label for="non2">Non</label>
              </span>
              @error('notion_pro')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div> 
<!-- 
          <h3>Choisissez Votre Formation</h3>
          <div class="row">
             <h4 class="" style="margin-left: 17px;">Niveau initiale</h4>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="1" name="formation" id="html&css">
                <label for="html&css">Developpement Web</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="4" name="formation" id="photoshop">
                <label for="photoshop">Multimedia</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="7" name="formation" id="word">
                <label for="word">Bureautique</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Maintenance</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Cablage Reseau</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Base de donnee</label>
              </span>
            </div>
            @error('formation')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div> 

          <div class="row">
             <h4 class="" style="margin-left: 17px;">Niveau intermediare</h4>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="1" name="formation" id="html&css">
                <label for="html&css">Developpement Web</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="4" name="formation" id="photoshop">
                <label for="photoshop">Multimedia</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="7" name="formation" id="word">
                <label for="word">Bureautique</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Maintenance</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Cablage Reseau</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Base de donnee</label>
              </span>
            </div>
            @error('formation')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div> 

          <div class="row">
             <h4 class="" style="margin-left: 17px;">Niveau avancer</h4>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="1" name="formation" id="html&css">
                <label for="html&css">Developpement Web</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="4" name="formation" id="photoshop">
                <label for="photoshop">Multimedia</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="7" name="formation" id="word">
                <label for="word">Bureautique</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Maintenance</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Cablage Reseau</label>
              </span>
            </div>
            <div class="col-sm-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="9" name="formation" id="maintenance">
                <label for="maintenance">Base de donnee</label>
              </span>
            </div>
            @error('formation')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div>  -->


          
           <div class="row">
             <h4 style="margin-left: 15px;">votre niveau de formation</h4>
            <div class="col-md-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="1" name="formation" id="html&css">
                <label for="html&css">Niveau Initial</label>
              </span>
            </div>
            <div class="col-md-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="2" name="formation" id="Php">
                <label for="Php">Niveau Intemediare</label>
              </span>
            </div>
            <div class="col-md-4">
              <span class="radio control">
                <input type="radio" class="input @error('formation') is-invalid @enderror" value="3" name="formation" id="POO">
                <label for="POO">Niveau Avance</label>
              </span>
            </div>
          </div>



          
      
          
          <p>
            <br>
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


