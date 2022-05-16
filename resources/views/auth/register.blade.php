@extends('layouts.home')

@section('title', '- Register')

@section('content')

<div class="banner">
  <div class="account-contenedor">
    <div class="account">
      <div class="account-texto">
        <img class="iconoAccount" src="img/account.png" alt="">
        <p style="font-size:25px;">Crear Usuario</p>
      </div>
      <form action="" class="formAccount" method="post">
        @csrf
        <div class="formAccount-contenedor">
          <div class="account-sesion">
            <input autofocus type="text" name="name" id="name" placeholder="Ingrese su Nombre">
            @error('name')
              <p id="errorLogIn">* {{$message}}</p>
            @enderror
          </div>
          <div class="account-sesion">
            <input type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
            @error('apellido')
              <p id="errorLogIn">* {{$message}}</p>
            @enderror
          </div>
        </div>
        <div class="formAccount-contenedor">
          <div class="account-sesion">
            <input type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono">
            @error('telefono')
              <p id="errorLogIn">* {{$message}}</p>
            @enderror
          </div>
          <div class="account-sesion">
            <input type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion">
            @error('direccion')
              <p id="errorLogIn">* {{$message}}</p>
            @enderror
          </div>
        </div>
        <div class="formAccount-contenedor">
          <div class="account-contraseña">
            <input type="email" name="email" id="email" placeholder="Ingrese su Email">
            @error('email')
              <p id="errorLogIn">* {{$message}}</p>
            @enderror
          </div>
        </div>
        <div class="formAccount-contenedor">
          <div class="account-contraseña">
            <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
            @error('password')
              <p id="errorLogIn">* {{$message}}</p>
            @enderror
          </div>
          <div class="account-contraseña">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Contraseña confirmation">
          </div>
        </div>
        <div class="account-boton">
          <button class="ingresar" type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection