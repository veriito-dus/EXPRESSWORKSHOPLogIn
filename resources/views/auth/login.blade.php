@extends('layouts.home')

@section('title', '- Login')

@section('content')

<div class="banner">
  <div class="logIn-contenedor">
    <div class="logIn">
      <div class="logIn-texto">
        <img class="iconoUser" src="img/user.png" alt="">
        <p style="font-size:25px;">Iniciar Sesion</p>
      </div>

      <form action="" class="formLogIn" method="post">
        @csrf
        <div class="logIn-sesion">
          <input autofocus type="email" value="" name="email" id="email" placeholder="Ingrese su Email" />
          @error('message')
          <p id="errorLogIn">* {{$message}}</p>
          @enderror
        </div>
        <div class="logIn-contraseña">
          <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
        </div>
        <div class="logIn-boton">
          <button type="submit" class="ingresar">Ingresar</button>
        </div>
      </form>
    </div>
  </div>
  <div class="account-logIn">
      <p style="font-size:15px">No tienes cuenta? <a href="{{url('/register')}}" class="account-logIn-boton">REGISTRATE</a></p>
    </div>

</div>















{{-- antes del diseño --}}


{{-- <div>
  <h1>aca es el LogIncito</h1>
  <form action="" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Email">
    @error('message')
      <p style="color:red">* {{$message}}</p>
    @enderror
    <input type="password" name="password" id="password" placeholder="Contraseña">
    <button type="submit">Ingresar</button>
  </form>
</div> --}}

@endsection