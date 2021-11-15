@extends('user.layouts.app')

{{-- @section('bg-img',Storage::disk('local')->url($post->image)) --}}

@section('head')
{{-- <link rel="stylesheet" href="{{ asset('user/css/prism.css') }}"> --}}
@endsection


@section('main-content')

<main class="main-content">
  <div class="content">
    <header class="row header_empro" style="text-align:center;">
      <div class="col-sm-3 page_empro"><a href="/" class="logo"> <img src="{{ asset('user/images/logo-empro.png') }}" alt=""></a></div>
      <div class="col-sm-9 page_empro">
         <h1 class="h1_page">ENREGISTREMENT DE VOTRE DEMANDE DE SERVICE</h1>
      </div>
    </header> 

     <div class="row">
      <form action="{{ route('user.devi.post') }}" method="POST" class="signup-form form-background">
        @csrf
        <div class="form-content">
          <div class="row">
            <p style=" font-weight:300;margin-left:15px;">Quel est votre status ?</p>
            <div class="col-sm-6" style="display: flex;">
              <span class="radio control">
                <input required type="radio" value="1" name="genre" class="@error('genre') is-invalid @enderror" id="Particulier">
                <label for="Particulier" style="margin-right: 30px">Particulier</label>
              </span>
              <span class="radio control">
                <input required type="radio" value="2" class="@error('genre') is-invalid @enderror" name="genre" id="Entreprise">
                <label for="Entreprise">Entreprise</label>
              </span>
            </div>
              @error('genre')
              <div style="margin-top: 5px;" class="col-sm-12 messege_error">{{ $message }}</div>
              @enderror
          </div>
          <div class="row">
            <div class="col-sm-6">
            <p>
              <label class="input_label" for="nomcomplet">Votre prenom et nom <span class="etoile_validation"> *</span></label>
              <input required type="text" name="nomcomplet" value="{{ old('nomcomplet') }}" class="input @error('nomcomplet') is-invalid @enderror" value="{{ old('nomcomplet') }}" placeholder="">
              </p>
              @error('nomcomplet')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6"><p>
            <label class="input_label" for="email">Votre adresse email <span class="etoile_validation"> *</span></label>
              <input required type="email" name="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder=""></p>
              @error('email')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6"><p>
            <label class="input_label" for="phone">Votre telephone <span class="etoile_validation"> *</span></label>
              <input required type="number" name="phone" class="input @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder=""></p>
              @error('phone')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-sm-6">
            
              <p>
                <label class="input_label"  for="service">Choisissez Votre service <span class="etoile_validation"> *</span></label>
                <span class="select control">
                  <select name="service" requiredid ="service" class="input @error('service') is-invalid @enderror" value="{{ old('service') }}" style="border: 1px solid silver;background:transparent;">
                      <option value="Creation de site web">Creation de site web</option>
                      <option value="Service multimedia">Service multimedia</option>
                      <option value="Service maintenance">Service maintenance</option>
                      <option value="Service bureautique">Service bureautique</option>
                  </select>
                </span>
              </p> 
              @error('service')
                  <div class="messege_error">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          <div class="row">
              <div class="col-md-12">
                   <p>
                    <label class="input_label" for="description">Donner la description de votre demande <span class="etoile_validation"> *</span></label>
                    <textarea required name="description" class="input @error('description') form-control is-invalid @enderror" value="{{ old('description') }}" id="" rows="10" style="width: 100%;"></textarea>
                  </p>
              </div>
              @error('description')
                <div class="messege_error">{{ $message }}</div>
              @enderror
          </div>
          <br>
          <p>
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


