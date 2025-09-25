@extends('master')
@section('title','À propos — Samaneh Mahboudi')
@section('site_upper','Profil & compétences')
@section('site_lower','À propos')

@section('content')

<section class="page-section about-heading">
  <div class="container">

    <!-- Image latérale -->
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0"
         src="{{ asset('theme/assets/img/about.jpg') }}" alt="Photo de présentation">

    <!-- Bloc carte avec fond "bg-faded" -->
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">

            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Full stack — focus Backend</span>
              <span class="section-heading-lower">Qui je suis</span>
            </h2>

            <p>
              Je m’appelle <strong>Samaneh Mahboudi</strong>. Née à <strong>Shiraz</strong> (Iran),
              je suis titulaire d’un <strong>baccalauréat en génie électronique</strong>.
              Installée au Canada, j’ai appris le français et choisi de me réorienter vers le
              <strong>développement web</strong>, un domaine qui unit la rigueur de l’ingénierie
              et la créativité des interfaces.
            </p>

            <p>
              Je poursuis l’<strong>AEC – Conception et programmation de sites web</strong>
              au <strong>Collège de Maisonneuve</strong> (2024–2026). Je me spécialise en <strong>backend</strong>
              (<strong>PHP / Laravel</strong>, <strong>Node.js</strong>, <strong>MySQL</strong>) tout en construisant
              des interfaces propres et responsives en <strong>HTML/CSS/JavaScript</strong>.
              J’aime transformer des besoins concrets en solutions <strong>fiables, documentées et performantes</strong>.
            </p>

            <h3 class="h5 mt-4">Compétences techniques</h3>
            <ul class="mb-3">
              <li><b>Backend :</b> PHP (MVC), Laravel, Node.js, intégration d’API REST</li>
              <li><b>Base de données :</b> MySQL</li>
              <li><b>Frontend :</b> HTML5, CSS/SCSS, JavaScript, Bootstrap</li>
              <li><b>Outils :</b> Composer, Git/GitHub, Twig, WordPress, Figma</li>
              <li><b>En apprentissage :</b> React, approfondissement Laravel</li>
            </ul>

            <h3 class="h5 mt-4">Mes valeurs de travail</h3>
            <ul class="mb-3">
              <li>Qualité du code : clarté, tests et bonnes pratiques</li>
              <li>Accessibilité & performance : expériences rapides et inclusives</li>
              <li>Collaboration : communication simple, esprit d’équipe, fiabilité</li>
              <li>Curiosité et autonomie : apprendre vite, livrer propre</li>
            </ul>

            <h3 class="h5 mt-4">Parcours en bref</h3>
            <ul class="mb-3">
              <li><b>2024–2026 :</b> AEC – Conception et programmation de sites web, Collège de Maisonneuve (Montréal)</li>
              <li><b>2011–2015 :</b> Baccalauréat en génie électronique, Université de Marvdasht (Iran)</li>
            </ul>

            <h3 class="h5 mt-4">Objectif</h3>
            <p class="mb-0">
              Rejoindre une équipe à Montréal / Rive-Nord pour un <strong>stage</strong> ou un
              <strong>poste junior (backend)</strong> sur Laravel/Node/React — avec le sourire et l’envie d’apprendre&nbsp;!
            </p>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
