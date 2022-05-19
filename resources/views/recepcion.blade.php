<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>EXPRESSWORKSHOP - recepcion</title>
  <link rel="icon" href="img/logo.ico" />

  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="css/plugins/font-awesome.css">
  <link rel="stylesheet" href="css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="css/plugins/simplebar.css">
  <link rel="stylesheet" href="css/plugins/owl.carousel.min.css">
  <link rel="stylesheet" href="css/plugins/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/plugins/jquery.animatedheadline.css">

  <link rel="stylesheet" class="back-color" href="css/style-dark.css">
  <link rel="stylesheet" href="css/style-demo.css">

  <link rel="stylesheet" class="posit-nav" href="css/settings/left-nav.css" />
  <link rel="stylesheet" class="theme-color" href="css/settings/red-color.css" />

</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loading-area">
      <div class="circle"></div>
    </div>
    <div class="left-side"></div>
    <div class="right-side"></div>
  </div>

  <!-- Main Site -->
  <div id="home">
    <div id="reservas">

      <div class="header-mobile">
        <a class="header-toggle"><i class="fas fa-bars"></i></a>
        <h2>EXPRESSWORKSHOP</h2>
      </div>

      <nav class="header-main" data-simplebar>

        <div class="logo">
          <a href="/recepcion"><img src="img/logo.png" alt=""></a>
        </div>

        <ul>
          <li data-tooltip="Reservas" data-position="top">
            <a href="#reservas" class="icon-a fas fa-book-open"></a>
          </li>
        </ul>

        <a class="music-bg" href="{{url('/logOut')}}">
          <div class="lines" data-tooltip="Salir">
            <i style="font-size:30px" class="icon-r fas fa-user"></i>
          </div>
          @if (auth()->check())
          <p><b>{{auth()->user()->name}}</b></p>
          @endif
        </a>

      </nav>

      <div class="pt-home" style="background-image: url('img/home-bg.png')">
        <section>
          <div class="banner">
            <h1>Bienvenido a</h1>
            <h1>EXPRESSWORKSHOP</h1>
          </div>
        </section>
      </div>

      <!-- reservas Section -->
      <div class="page pt-portfolio" data-simplebar>
        <section class="container">
          <div class="header-page mt-70 mob-mt">
            <h2>Reservas</h2>
            <span></span>
          </div>
          <div class="contact-form col-lg-12 col-sm-12 mt-70">
            <form method="post" action="{{route('recepcion.store')}}" class="box contact-valid">
              @csrf
              <h4>Crear reserva</h4>
              <div class="row mt-40">
                <div class="col-lg-4 col-sm-12">
                  <p class="text-center">Cliente</p>
                  <select name="id_cliente" class="form-control" style="background-color:#070708;color:white;border:1px solid #d94c48">
                    @foreach ($usuarios as $usuario)
                      <option value="{{ $usuario->id }}">{{$usuario->name}} {{$usuario->apellido}}</option>
                    @endforeach                    
                  </select>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <p class="text-center">Placa</p>
                  <select name="id_vehiculo" class="form-control" style="background-color:#070708;color:white;border:1px solid #d94c48">
                    @foreach ($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id }}">{{$vehiculo->placa}}</option>
                    @endforeach  
                  </select>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <p class="text-center">Fecha a reservar</p>
                  <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Ingrese la marca">
                </div>
                <div class="col-lg-4 col-sm-12">
                  <p class="text-center mt-20">Tipo de mantenimiento</p>
                  <select name="id_mantenimiento" class="form-control" style="background-color:#070708;color:white;border:1px solid #d94c48">
                    @foreach ($mantenimientos as $mantenimiento)
                      <option value="{{ $mantenimiento->id }}">{{$mantenimiento->tipo_de_mantenimiento}}</option>
                    @endforeach
                  </select>
                </div>
                <input type="hidden" name="id_estado" id="id_estado" value="2">
                @if (auth()->check())
                <input type="hidden" name="id_recepcionista" id="id_recepcionista" value="{{auth()->user()->id}}">
                {{-- <p><b>{{auth()->user()->name}}</b></p> --}}
                @endif
                <div class="col-lg-12 col-sm-12 text-center mt-30">
                  <button type="submit" class="btn-st">Agregar</button>
                  <div id="loader">
                    <i class="fas fa-sync"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="row mt-60">
            <div class="col-lg-12 col-sm-12 contact-form">
              <div class="experience box" style="margin-bottom:20px">
                <h4 style="margin-bottom:20px">Reservas</h4>
                <div class="tabla-reserva" style="">
                  <table  style="margin:auto; width:100%;">
                    <thead class="">
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Placa</th>
                        <th>Usuario</th>
                        <th>Tipo de mantenimiento</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($reservaciones as $reservacion)
                      <tr>
                        <td>{{$reservacion->id}}</td>
                        <td>{{$reservacion->fecha}}</td>
                        <td>{{$reservacion->placa}}</td>
                        <td>{{$reservacion->name}} {{$reservacion->apellido}}</td>
                        <td>{{$reservacion->tipo_de_mantenimiento}}</td>
                        <td>{{$reservacion->estado}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>

  <!-- All Script -->
  <script src="js/jquery.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animatedheadline.min.js"></script>
  <script src="js/jquery.easypiechart.js"></script>
  <script src="js/jquery.validation.js"></script>
  <script src="js/tilt.js"></script>
  <script src="js/main.js"></script>
  <script src="js/main-demo.js"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

</body>

</html>
<style>
  .tabla-reserva{
  text-align:center;
	padding: 20px;
	background-image: url("img/tablas.png");
  background-repeat: no-repeat;
  background-size: cover;
	border-radius:10px;
	box-shadow: 5px 5px 8px rgb(111, 111, 111);
}
.tabla-reserva th{
  color:#d94c48;
  border-top:1px solid #ffffff;
  padding: 10px;

}
.tabla-reserva tr{
  color:rgb(255, 255, 255);
  border-bottom:1px solid #ffffff;
  padding-top: 10px;
}
.tabla-reserva td{
  padding: 10px;
}
</style>