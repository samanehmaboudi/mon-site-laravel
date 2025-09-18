@extends('master')
@section('title','Projets — Samaneh Mahboudi')
@section('site_upper','Sélection de travaux')
@section('site_lower','Projets')

@section('content')
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ms-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">PHP • MVC • Twig • MySQL</span>
            <span class="section-heading-lower">Lord Stampee</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('theme/assets/img/products-01.jpg') }}" alt="">
      <div class="product-item-description d-flex me-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Plateforme d’enchères de timbres : authentification, enchères, favoris, intégration MySQL.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex me-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Node.js • API OpenWeather</span>
            <span class="section-heading-lower">MeteoRest</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('theme/assets/img/products-02.jpg') }}" alt="">
      <div class="product-item-description d-flex ms-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Mini-app Node + Express. Requête API météo, stockage JSON, UI Bootstrap.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ms-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">REST • Visualisation</span>
            <span class="section-heading-lower">FinanceRest</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('theme/assets/img/products-03.jpg') }}" alt="">
      <div class="product-item-description d-flex me-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Récupération & visualisation des données boursières (API Alpha Vantage).</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
