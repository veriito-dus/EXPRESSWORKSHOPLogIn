<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>EXPRESSWORKSHOP - mecanico</title>
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
    <div id="reservasMecanico">
      <div id="pendienteMecanico">

        <div class="header-mobile">
          <a class="header-toggle"><i class="fas fa-bars"></i></a>
          <h2>EXPRESSWORKSHOP</h2>
        </div>

        <nav class="header-main" data-simplebar>

          <div class="logo">
            <a href="/mecanico"><img src="img/logo.png" alt=""></a>
          </div>

          <ul>
            <li data-tooltip="Reservas" data-position="top">
              <a href="#reservasMecanico" class="icon-a fas fa-book-open"></a>
            </li>
            <li data-tooltip="Mis Pendientes" data-position="top">
              <a href="#pendienteMecanico" class="icon-r fas fa-list"></a>
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

        <!-- perfil Section -->
        <div class="page pt-about" data-simplebar>
          <section class="container">

            <div class="header-page mt-70 mob-mt">
              <h2>Reservas</h2>
              <span></span>
            </div>

						<div class="col-lg-12 col-sm-12 mt-95">
    					<div class="price box">
    						<div class="head-price">
                  <i class="fa fa-wrench"></i>
                  <h4>Pendientes</h4>
                </div>
								<div class="body-price">
                  <div class="tabla-reserva mt-20" style="">
                    <table  style="margin:auto; width:100%;">
                      <thead class="">
                        <tr>
                          <th>#</th>
                          <th>Fecha</th>
                          <th>Placa</th>
                          <th>Tipo de mantenimiento</th>
                          <th>Estado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>enero</td>
                          <td>3000</td>
                          <td>3000</td>
                          <td>
                            <form action="" method="post">
                              <input type="hidden" name="user_mecanico" value="">
                              <input type="hidden" name="user_reserva" value="">
                              <button type="submit" class="botonEstadoMecanico">Tomar</button>
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>enero</td>
                          <td>3000</td>
                          <td>3000</td>
                          <td>
                            <form action="" method="post">
                              <input type="hidden" name="user_mecanico" value="">
                              <input type="hidden" name="user_reserva" value="">
                              <button type="submit" class="botonEstadoMecanico">Tomar</button>
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>enero</td>
                          <td>3000</td>
                          <td>3000</td>
                          <td>
                            <form action="" method="post">
                              <input type="hidden" name="user_mecanico" value="">
                              <input type="hidden" name="user_reserva" value="">
                              <input type="hidden" name="observaciones" value="Pendiente">
                              <button type="submit" class="botonEstadoMecanico">Tomar</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            </section>
        </div>

        <!-- mis vehiculos Section -->
        <div class="page pt-resume" data-simplebar>
          <section class="container">

            <div class="header-page mt-70 mob-mt">
              <h2>Mis Trabajos Pendientes</h2>
              <span></span>
            </div>
            <div class="col-lg-12 col-sm-12 mt-95">
              <div class="price box">
                <div class="head-price">
                  {{-- <i class="fa fa-file"></i> --}}
                  <i class="fa fa-highlighter"></i>
                  <h4>Reservaciones</h4>
                </div>
                <div class="body-price">
                  <div class="tabla-reserva mt-20" style="">
                    <table  style="margin:auto; width:100%;">
                      <thead class="">
                        <tr>
                          <th>#</th>
                          <th>Fecha</th>
                          <th>Placa</th>
                          <th>Propietario</th>
                          <th>Tipo de mantenimiento</th>
                          <th>Estado</th>
                          <th>Observaciones</th>
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
                          <td>
                            <textarea class="observacionesMecanico" name="note" id="note"
                              placeholder="Your Message"></textarea>
                          </td>
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
	border-radius:10px;
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
.botonEstadoMecanico{
  border: 2px solid#17191B;
  background-color:#17191B;
  padding:3px 25px;
  border-radius:10px;
  cursor:pointer;
  color: white;
  font-size: 15px;
}
.tabla-reserva .observacionesMecanico{
  border: 2px solid#17191B;
  background-color:#17191B;
  padding:3px 25px;
  border-radius:10px;
  color: white;
  font-size: 13px;
}
.botonEstadoMecanico:hover{
  color:#d94c48;
}
</style>