<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Samaneh Mahboudi — Développeuse web')</title>
  <meta name="description" content="@yield('meta','Portfolio — projets, compétences et contact.')">
  <link rel="icon" type="image/x-icon" href="{{ asset('theme/assets/favicon.ico') }}"/>

  <!-- Polices du thème -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

  <!-- CSS du thème (inclut Bootstrap) -->
  <link href="{{ asset('theme/css/styles.css') }}" rel="stylesheet">
  {{-- Ta feuille perso optionnelle (si tu veux des retouches)
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}
</head>
<body>
  <!-- Bandeau typographique du thème -->
  <header>
    <h1 class="site-heading text-center text-faded d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">@yield('site_upper','Développeuse web full stack')</span>
      <span class="site-heading-lower">@yield('site_lower','Samaneh Mahboudi')</span>
    </h1>
  </header>

  <!-- NAVIGATION du thème -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="{{ url('/') }}">Samaneh</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Basculer la navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase {{ request()->is('a-propos') ? 'active' : '' }}" href="{{ url('/a-propos') }}">À&nbsp;propos</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase {{ request()->is('projets') ? 'active' : '' }}" href="{{ url('/projets') }}">Projets</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- FOOTER du thème -->
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">© {{ date('Y') }} Samaneh Mahboudi — Développeuse web</p>
    </div>
  </footer>

  <!-- JS Bootstrap + JS du thème -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('theme/js/scripts.js') }}"></script>
</body>
</html>
