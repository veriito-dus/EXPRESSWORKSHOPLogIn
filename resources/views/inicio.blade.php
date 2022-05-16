@extends('layouts.home')
@section('content')
<div class="banner">
  <h1>EXPRESSWORKSHOP</h1>
  <p class="cd-headline rotate-1">
    <span>Los mejores en </span>
    <span class="cd-words-wrapper">
      <b class="is-visible">Mantenimiento</b>
      <b>Calidad</b>
      <b>Tiempo</b>
      <b>Puntualidad</b>
    </span>
  </p>
  <a href="{{url('/logIn')}}"><input type="submit" class="iniciarSesion" value="Ingresar"></a>
</div>

@endsection