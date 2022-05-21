<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>EXPRESSWORKSHOP - cliente</title>
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
    <div id="perfil">
      <div id="vehiculos">
        <div id="reservas">

          <div class="header-mobile">
            <a class="header-toggle"><i class="fas fa-bars"></i></a>
            <h2>EXPRESSWORKSHOP</h2>
          </div>

          <nav class="header-main" data-simplebar>

            <div class="logo">
              <a href="/cliente"><img src="img/logo.png" alt=""></a>
            </div>

            <ul>
              <li data-tooltip="Perfil" data-position="top">
                <a href="#perfil" class="icon-a fas fa-user-tie"></a>
              </li>
              <li data-tooltip="Mis Vehiculos" data-position="top">
                <a href="#vehiculos" class="icon-r fas fa-car"></a>
              </li>
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

              <div class="social">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>

            </section>
          </div>

          <!-- perfil Section -->
          <div class="page pt-about" data-simplebar>
            <section class="container">

              <div class="header-page mt-70 mob-mt">
                <h2>Mi Perfil</h2>
                <span></span>
              </div>

              <div class="row mt-100">
							  <div class="col-lg-12 col-sm-12">
							  	<div class="info box">
                    @foreach ($usuarios as $usuario)
							  		<div class="row">
							  			<div class="col-lg-3 col-sm-4">
                        <div class="photo">
                          <img alt="" src="img/user-photo.jpg">
                        </div>
                      </div>

							  			<div class="col-lg-3 col-sm-4">
							  				<div class="info-icon">
                          <div class="desc-icon">
                            <h4 style="padding-bottom: 10px;">{{$usuario->name}}  {{$usuario->apellido}}</h4>
                            <div style="display:flex">
                              <div class="locAdmin">
                                Telefono:
                              </div>
                              <div class="locAdmin-texto">
                                {{$usuario->telefono}}
                              </div>
                            </div>
                            <div style="display:flex">
                              <div class="locAdmin">
                                Direccion:
                              </div>
                              <div class="locAdmin-texto">
                                {{$usuario->direccion}}
                              </div>
                            </div>
							  					</div>
							  				</div>
							  			</div>

							  			<div class="col-lg-3 col-sm-4">
							  				<div class="info-icon">
							  					<div class="desc-icon">
                            <div style="display:flex">
                              <div class="locAdmin">
                                Usuario:
                              </div>
                              <div class="locAdmin-texto">
                                {{$usuario->email}}
                              </div>
                            </div>
                          <a href="{{route('cliente.edit',$usuario->id)}}" type="submit" class="btn-st">Modificar</a>
							  					</div>
							  				</div>
							  			</div>
							  		</div>
                  @endforeach
							  	</div>
							  </div>
							</div>
            </section>
          </div>

          <!-- mis vehiculos Section -->
          <div class="page pt-resume" data-simplebar>
            <section class="container">
              <div class="header-page mt-70 mob-mt">
                <h2>Mis Vehiculos</h2>
                <span></span>
              </div>
              <div class="contact-form col-lg-12 col-sm-12 mt-70">
                <form method="post" class="box contact-valid" id="" action="{{url('clientes')}}">
                  @csrf
                  <h4>Agregar vehiculo</h4>
                  <div class="row mt-20">
                    <div class="col-lg-4 col-sm-12">
                      <input type="text" name="marca" id="marca" class="form-control" placeholder="Ingrese la marca">
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Ingrese el modelo">
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <input type="text" name="placa" id="placa" class="form-control" placeholder="Ingrese la placa">
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" name="estado" id="estado" value="en circulacion">
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
                @foreach ($vehiculos as $vehiculo)
                <div class="col-lg-3 col-sm-5">
                  <div class="experience box" style="margin-bottom:20px">
                    <div class="item">
                      <div class="main">
                        <h4>{{$vehiculo->placa}}</h4>
                        <ul>
                          <li>Marca: {{$vehiculo->marca}}</li>
                          <li>Modelo: {{$vehiculo->modelo}} </li>
                        </ul>
                      </div>
                      <form action="{{route('cliente.update',$vehiculo->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="estado" id="estado" value="no en circulacion">
                        <button type="submit" class="btn-st mt-20">Cancelar</button>
                      </form>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </section>
          </div>

          <!-- reservas Section -->
          <div class="page pt-portfolio" data-simplebar>
            <section class="container">
              <div class="header-page mt-70 mob-mt">
                <h2>Mis Reservas</h2>
                <span></span>
              </div>
              <div class="contact-form col-lg-12 col-sm-12 mt-70">
                <form method="post" class="box contact-valid" action="{{route('cliente.store')}}">
                  @csrf
                  <h4>Crear reserva</h4>
                  <div class="row mt-40">
                    <input type="hidden" name="id_cliente" id="id_cliente" value="{{auth()->user()->id}}">

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
                    <input type="hidden" name="id_estado" id="id_estado" value="1">
                    <input type="hidden" name="id_recepcionista" id="id_recepcionista" value="n/n">


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
                    <h4 style="margin-bottom:20px">Mis reservas</h4>
                    <div class="tabla-reserva" style="">
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
                          @foreach ($reservaciones as $reservacion)
                          <tr>
                            <td>{{$reservacion->id}}</td>
                            <td>{{$reservacion->fecha}}</td>
                            <td>{{$reservacion->placa}}</td>
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
  /* border:1px solid #ffffff;; */
	padding: 20px;
	background-image: url("img/tablas.png");
  background-repeat: no-repeat;
  background-size: cover;
	border-radius:10px;
	/* backdrop-filter: blur(10px);
	-webkit-backdrop-filter: blur(10px); */
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