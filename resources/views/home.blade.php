@extends('master')
@section('title','Accueil — Samaneh Mahboudi')
@section('site_upper','Développeuse web full stack')
@section('site_lower','Samaneh Mahboudi')

@section('content')
<!-- Bloc intro du thème -->
<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('theme/assets/img/intro.jpg') }}" alt="">
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
          <span class="section-heading-upper">Laravel • PHP • JavaScript</span>
          <span class="section-heading-lower">Interfaces élégantes & backends fiables</span>
        </h2>
        <p class="mb-3">
          J’aide les organisations à transformer des besoins réels en produits web rapides,
          accessibles et maintenables. Frontend (HTML/CSS/Bootstrap/JS) et Backend (Laravel, MVC, MySQL).
        </p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{ url('/projets') }}">Voir mes projets</a></div>
      </div>
    </div>
  </div>
</section>

<!-- Bloc "promesse" / valeurs -->
<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner bg-faded text-center rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Mon engagement</span>
            <span class="section-heading-lower">Qualité & simplicité</span>
          </h2>
          <p class="mb-0">
            Code propre, conception claire, documentation, performance et accessibilité.
            Objectif : livrer des interfaces agréables et des backends stables, sans surprise.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
