@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div>
  <h1>aca es el Registros</h1>
  <form action="" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nombre">
    @error('name')
      <p style="color:red">* {{$message}}</p>
    @enderror

    <input type="text" name="apellido" id="apellido" placeholder="Apellido">
    @error('apellido')
      <p style="color:red">* {{$message}}</p>
    @enderror

    <input type="text" name="telefono" id="telefono" placeholder="Telefono">
    @error('telefono')
      <p style="color:red">* {{$message}}</p>
    @enderror

    <input type="text" name="direccion" id="direccion" placeholder="Direccion">
    @error('direccion')
      <p style="color:red">* {{$message}}</p>
    @enderror
    

    <input type="email" name="email" id="email" placeholder="Email">
    @error('email')
      <p style="color:red">* {{$message}}</p>
    @enderror

    <input type="password" name="password" id="password" placeholder="Contraseña">
    @error('password')
      <p style="color:red">* {{$message}}</p>
    @enderror

    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Contraseña confirmation">
    <button type="submit">Ingresar</button>
    {{-- <input type="submit" class="agregar" value="Ingresar"> --}}
  </form>
</div>

@endsection