@extends('master')
@section('title','Contact — Samaneh Mahboudi')
@section('site_upper','Dispo sous 24–48h')
@section('site_lower','Contact')

@section('content')
<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner bg-faded text-center rounded">
          <h2 class="section-heading mb-5">
            <span class="section-heading-upper">Écrivez-moi</span>
            <span class="section-heading-lower">On échange ?</span>
          </h2>
          <p class="address mb-4"><em><strong>Repentigny, QC</strong><br>Montréal et environs</em></p>
          <p class="mb-4"><small><em>Email</em></small><br><a href="mailto:mahboudisamaneh@yahoo.com">mahboudisamaneh@yahoo.com</a></p>

          @if ($errors->any())
            <div class="alert alert-danger text-start">
              <ul class="mb-0">@foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach</ul>
            </div>
          @endif

          <form method="POST" action="{{ url('/contact') }}" class="text-start">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" name="message" rows="5" required>{{ old('message') }}</textarea>
            </div>
            <button class="btn btn-primary btn-xl" type="submit"><i class="bi bi-send me-2"></i>Envoyer</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
