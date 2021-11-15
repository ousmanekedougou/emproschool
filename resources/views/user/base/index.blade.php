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
         <h1 class="h1_page">FORMATION EN ADMINISTRATION DES BASE DE DONNEE</h1>
      </div>
    </header> 

     <div class="row">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vitae.
      </p>
      <form action="{{ route('user.base.post') }}" method="POST" class="signup-form .form-background">
        @csrf
        <div class="form-content">
        <input type="hidden" value="3" name="formation">
          <div class="row">
            <p style="font-weight:300;margin-left:15px;">Quel est votre civilité ?</p>
            <div class="col-sm-6" style="display: flex;margin-bottom:5px;">
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
            <div class="col-md-12 messege_error" >{{ $message }}</div>
            @enderror
          </div>
              
          <div class="row">
            <div class="col-sm-6">
              <p>
                <label class="input_label" for="nomcomplet">Votre prenom et complet</label>
                <input required type="text" name="nomcomplet" id="nomcomplet" class="input @error('nomcomplet') is-invalid @enderror" value="{{ old('nomcomplet') }}" placeholder="">
                @error('nomcomplet')
                <div class="messege_error">{{ $message }}</div>
                @enderror
              </p>
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="email">Votre adresse email</label>
              <input required type="email" id="email" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="">
              @error('email')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="phone">Votre telephone</label>
              <input required type="number" id="phone" name="phone" class="input @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="">
              @error('phone')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="adresse">Votre adresse physique</label>
              <input required type="text" id="adresse" name="adresse" class="input @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" placeholder="">
              @error('adresse')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="date_naissance">Votre date de naissance</label>
              <input required type="date" id="date_naissance" name="date_naissance" class="input @error('date_naissance') is-invalid @enderror" value="{{ old('date_naissance') }}" placeholder="">
              @error('date_naissance')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </p>
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="lieu_naissance">Votre lieu de naissance</label>
              <input required type="text" id="lieu_naissance" name="lieu_naissance" class="input @error('lieu_naissance') is-invalid @enderror" value="{{ old('lieu_naissance') }}" placeholder="">
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
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="Auccun" name="niveau" id="Auccun">
                <label for="Auccun">Auccun</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="BFEM" name="niveau" id="BFEM">
                <label for="BFEM">BFEM</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="CAP/BEP" name="niveau" id="CAP/BEP">
                <label for="CAP/BEP">CAP/BEP
                </label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="BAC" name="niveau" id="BAC">
                <label for="BAC">BAC</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="BAC+2(DUT/BTS)" name="niveau" id="BAC+2(DUT/BTS)">
                <label for="BAC+2(DUT/BTS)">BAC+2 (DUT / BTS)</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="BAC+3" name="niveau" id="BAC+3">
                <label for="BAC+3">BAC+3</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="BAC+5" name="niveau" id="BAC+5">
                <label for="BAC+5">BAC+5</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('niveau') is-invalid @enderror" value="Autre" name="niveau" id="Autre">
                <label for="Autre">Autre</label>
              </span>
              @error('niveau')
              <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-4">
              <h4>Travaillez-vous</h4>
              <span class="radio control">
                <input required type="radio" class="input @error('fonction') is-invalid @enderror" value="oui" name="fonction" id="oui1">
                <label for="oui1">Oui</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('fonction') is-invalid @enderror" value="non" name="fonction" id="non1">
                <label for="non1">Non</label>
              </span>
              @error('fonction')
                <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-4">
              <h4>Avez vous Abandonner les etudes</h4>
              <span class="radio control">
                <input required type="radio" class="input @error('abandon') is-invalid @enderror" value="oui" name="abandon" id="oui2">
                <label for="oui2">Oui</label>
              </span>
              <span class="radio control">
                <input required type="radio" class="input @error('abandon') is-invalid @enderror" value="non" name="abandon" id="non2">
                <label for="non2">Non</label>
              </span>
              @error('abandon')
              <div class="messege_error">{{ $message }}</div>
              @enderror
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


