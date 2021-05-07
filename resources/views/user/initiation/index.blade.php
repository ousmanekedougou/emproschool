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
        <p style="text-align: justify; margin-top:10px;">Choisissez votre avenir aujourd'hui! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vitae.</p>
      </div>
    </header> 

     <div class="row">
      <h1>FORMATION D'INITIATION A L'INFORMATIQUE</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vitae.
      </p>
      <form action="{{ route('user.initiation.post') }}" method="POST" class="signup-form .form-background">
        @csrf
        <div class="form-content">
          <div class="row">
            <p style=" font-weight:300;margin-left:15px;">Quel est votre civilité ? <span class="etoile_validation"> *</span></p>
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
                <div class="messege_error" style="margin-top: 10px;">{{ $message }}</div>
              @enderror
            </div>
          </div>

          
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


