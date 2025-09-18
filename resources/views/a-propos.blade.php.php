@extends('master')
@section('title','À propos — Samaneh Mahboudi')
@section('site_upper','Profil & compétences')
@section('site_lower','À propos')

@section('content')
<section class="page-section about-heading">
  <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('theme/assets/img/about.jpg') }}" alt="">
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Full stack (Frontend & Backend)</span>
              <span class="section-heading-lower">Qui je suis</span>
            </h2>
            <p>
              Développeuse web formée au Collège de Maisonneuve (AEC 2024-2025).
              Je conçois des applications en <b>Laravel/PHP</b> et <b>JavaScript</b> avec
              <b>Bootstrap</b> et <b>MySQL</b>. Maman de deux enfants, l’organisation et l’adaptabilité
              guident mon quotidien.
            </p>
            <p class="mb-0">
              <b>Compétences :</b> HTML, CSS/SCSS, Bootstrap, JavaScript, PHP (MVC), Laravel,
              Node.js (Express), MySQL, Composer, Twig, WordPress, Git/GitHub.
              <br><b>Langues :</b> Français, Anglais, Persan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
