@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<div class="justify-content-center m-5">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ asset('storage/dash.jpg') }}" alt="Dash">
    <div class="card-body">
      <h5 class="card-title">Bem vindo ao Dashboard</h5>
      <p class="card-text">#pay.livre #be.academy #laravel</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
@endsection