@extends('master')
@section('title','Message envoyé')
@section('site_upper','Merci pour votre message')
@section('site_lower','Confirmation')

@section('content')
<section class="page-section">
  <div class="container">
    <div class="bg-faded rounded p-5 col-xl-8 mx-auto">
      <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Récapitulatif</span>
        <span class="section-heading-lower">Contact</span>
      </h2>
      <p><strong>Nom :</strong> {{ $data['name'] }}</p>
      <p><strong>Email :</strong> {{ $data['email'] }}</p>
      <p class="mb-0"><strong>Message :</strong> {{ $data['message'] }}</p>
    </div>
  </div>
</section>
@endsection
