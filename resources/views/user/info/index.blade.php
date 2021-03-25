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

    <h3 class="text-center">Comment ça marche</h3>

    <div class="row" style="margin: 5px;">
      <p>Text de motivation exemple</p>
    </div>

    <div class="row" style="margin: 5px;">
      <h3 class="text-center">BUREAUTIQUE</h3>
      <h4>Niveau initial</h4>
      <p class="text-justify">
        <strong>Pour qui : </strong> Toutes personnes désireuses d’apprendre à utiliser les logiciels Microsoft office (Word Excel, Powerpoint) 
        <br> <strong>Prérequis :</strong> Être à l’aise dans le maniement de la souris et du clavier
        <br> <strong>Objectifs :</strong> Acquérir les bases essentielles pour concevoir des documents simples avec le l­ogiciel Word, faire des calculs avec le logiciel Excel, et faire des présentations avec le logiciel Powerpoint 
        <br> <strong>Finalité :</strong> Acquérir les fondamentaux de l’utilisation du pack Office Word – Excel – Powerpoint 
        <br><br> <strong>QUANTUM HORAIRE</strong> 25 H de cours Soit environ 3 semaines de cours et 3 jours / semaine
      </p>
      <h4>Niveau avancer</h4>
      <p class="text-justify"> 
      <strong>Pour qui : </strong> En complément, pour ceux qui ont suivi les formations en Bureautique Word – Excel -  Powerpoint du niveau Initiation, ou pour ceux qui ont une très bonne pratique de ces logiciels et qui veulent aller plus loin dans leur connaissance et maîtrise
      <br> <strong>Prérequis :</strong> Avoir suivi la formation en Bureautique du niveau Initiation ou avoir une très bonne pratique de ces logiciels
      <br> <strong>Objectifs :</strong> Savoir organiser son travail dans Word pour concevoir rapidement tous types de documents gagner un temps précieux par la maîtrise des fonctionnalités avancées de ces logiciels
      <br> <strong>Finalité :</strong> Approfondir sa maitrise de ces logiciels, pour gagner en efficacité
      <br><br> <strong>QUANTUM HORAIRE</strong>25 H de cours Soit environ 3 semaines de cours et 3 jours / semaine
      </p>
    </div>

    <div class="row" style="margin: 5px;">
      <h3 class="text-center">DEVELOPPEMENT WEB AVEC CODAGE</h3>
      <h4>Niveau initial</h4>
      <p class="text-justify">
        <strong>Pour qui : </strong>
        Toutes personnes qui souhaitent créer ou mettre à jour des sites Web

        <br> <strong>Objectifs :</strong>
        Maîtriser Internet en tant qu’utilisateur.

        Objectif
            • Créer ou modifier des pages HTML.
            • Découvrir les styles CSS et les nouveautés du HTML 5.

        <br> <strong>Finalité :</strong>
        Un apprentissage accessible pour tous : la pédagogie rend la programmation HTML abordable aux non-informaticiens.
        <br> <strong>QUANTUM HORAIRE</strong> 40 H de cours
        Soit environ 5 semaines de cours et 3 jours / semaine
      </p>
      <h4>Niveau avancer</h4>
      <p class="text-justify"> 
        <strong>Pour qui : </strong>
         Webmaster, concepteur de sites Web.
         Toute personne qui souhaite créer des sites Web et les mettre à jour avec les CSS.

        <br> <strong>Prérequis :</strong>
        Avoir une connaissance du HTML et l’expérience de la création de pages Web

        <br> <strong>Objectifs :</strong>
             Exploiter les ressources des CSS.
             Maîtriser le XHTML.
             Créer des pages Web de qualité.

        <br> <strong>Finalité :</strong>
        Construction d’un site web : toutes les notions étudiées sont mises en œuvre dans des exercices et travaux aboutissant à la réalisation d’un site.

        <br><br> <strong>QUANTUM HORAIRE</strong> 40 H de cours Soit environ 5 semaines de cours et 3 jours / semaine

      </p>
    </div>

    <div class="row" style="margin: 5px;">
      <h3 class="text-center">DEVELOPPEMENT WEB AVEC WORDPRESS </h3>
        <p class="text-justify">
        <strong>Pour qui : </strong>
          Toutes personnes désireuses d’apprendre à utiliser le WordPress et d’apprendre à créer un site Internet – site vitrine ou un blog avec WordPress

          <br> <strong>Prérequis :</strong>
          Être à l’aise dans le maniement de la souris et du clavier

          <br> <strong>Objectifs :</strong>
          Apprendre les fonctions essentielles de WordPress pour être en mesure de réaliser son site Internet, site vitrine ou blog

          <br> <strong>Finalité :</strong>
          Acquérir les fondamentaux de l’utilisation de WordPress

          <br><br> <strong>QUANTUM HORAIRE</strong> 30 H de cours
          Soit environ 4 semaines de cours et 3 jours / semaine
        </p>
    </div>

    <div class="row" style="margin: 5px;">
      <h3 class="text-center">ADMINISTARTION DES BASES DE DONNEE</h3>
      <h4>Niveau initiale</h4>
      <p class="text-justify">
      <strong>Pour qui : </strong>
         Webmaster, graphiste multimédia, correspondant et contributeur Web.
         Toute personne souhaitant créer des pages dynamiques avec PHP / MySQL.

        <br> <strong>Prérequis :</strong>
             Maîtriser parfaitement les bases de la  programmation 

        <br> <strong>Objectifs :</strong>
             Créer des pages Web dynamiques en PHP.
             S’initier à la gestion de base de données avec MySQL
        Points forts
             La formation repose sur une série d’exercices. Progressifs, ces ateliers vous permettront de comprendre le développement d’applications dans un environnement Intranet / Internet.

        <br><br> <strong>QUANTUM HORAIRE</strong> 40 H de cours
        Soit environ 5 semaines de cours et 3 jours / semaine
      </p>
      <h4>Niveau avancer</h4>
      <p class="text-justify">
      <strong>Pour qui : </strong>
         Développeurs
         Exploitants intervenant sur un serveur de bases de données
         Futurs administrateurs de bases de données

        <br> <strong>Prérequis :</strong>
        Connaissances des principes généraux des bases de données

        <br> <strong>Objectifs :</strong>
             Savoir interroger le contenu des tables sous divers aspects
             Pratiquer le langage interactif SQL dans tout environnement relationnel
             Être en mesure d’écrire des requêtes compatibles avec plusieurs SGBD

        <br> <strong>Finalité :</strong>.

             Les participants sont amenés à utiliser le langage SQL.

            <br> <strong>QUANTUM HORAIRE</strong> 40 H de cours
        Soit environ 5 semaines de cours et 3 jours / semaine
      </p>
    </div>

  </div>
  @include('user/layouts/sidebare')
</main>


@endsection

@section('footersection')
@endsection


