<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>EXPRESSWORKSHOP - Administrador</title>
  <link rel="icon" href="/img/logo.ico" />

  <link rel="stylesheet" href="/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="/css/plugins/font-awesome.css">
  <link rel="stylesheet" href="/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="/css/plugins/simplebar.css">
  <link rel="stylesheet" href="/css/plugins/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/plugins/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/plugins/jquery.animatedheadline.css">

  <link rel="stylesheet" class="back-color" href="/css/style-dark.css">
  <link rel="stylesheet" href="/css/style-demo.css">

  <link rel="stylesheet" class="posit-nav" href="/css/settings/left-nav.css" />
  <link rel="stylesheet" class="theme-color" href="/css/settings/red-color.css" />

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

    <div class="header-mobile">
      <a class="header-toggle"><i class="fas fa-bars"></i></a>
      <h2>EXPRESSWORKSHOP</h2>
    </div>

    <nav class="header-main" data-simplebar>
      <div class="logo">
        <a href="/administrador"><img src="/img/logo.png" alt=""></a>
      </div>
      <ul>
        <li data-tooltip="Perfil" data-position="top">
          <a href="#perfil" class="icon-a fas fa-user-tie"></a>
        </li>
        <li data-tooltip="Vehiculos" data-position="top">
          <a href="#vehiculos" class="icon-r fas fa-car"></a>
        </li>
        <li data-tooltip="Inventario" data-position="top">
          <a href="#inventario" class="icon-p fas fa-clipboard-list"></a>
        </li>
        <li data-tooltip="Miembros" data-position="top">
          <a href="#miembros" class="icon-a fas fa-users"></a>
        </li>
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

    <div class="pt-home" style="background-image: url('/img/home-bg.png')">
      <div class="editarPerfilCliente">
        <div class="header-page mt-70 mob-mt">
          <h2>Editar Mi Perfil</h2>
          <span></span>
        </div>
        <div class="">
          <div class="col-lg-12 col-sm-12 mt-100">
          	<div class="info box">
          		<div class="row contact-form">
                <form method="post" action="{{url('/administrador',$admin->id)}}" class="contact-valid" id="">
                  @csrf
                  @method('PUT')
                  <div class="row mt-20">
                    <div class="col-lg-4 col-sm-12 ml-20">
                      <div class="photo">
                        <img alt="" src="/img/user-photo.jpg">
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <p style="color:#d94c48">Nombre y Apellido:</p>
                      <h4 style="padding-bottom: 10px;">{{$admin->name}} {{$admin->apellido}}</h4>
                      <p style="color:#d94c48;margin:10px">Telefono:</p>
                      <input type="text" name="telefono" id="telefono" class="form-control" value="{{$admin->telefono}}" placeholder="Telefono">
                      <p style="color:#d94c48;margin-top:20px">Direccion:</p>
                      <input type="text" name="direccion" id="direccion" class="form-control" value="{{$admin->direccion}}" placeholder="Direccion">
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <p style="color:#d94c48">Usuario:</p>
                      <p>{{$admin->email}}</p>
                      <button type="submit" class="btn-st">Guardar</button>
                      <a href="/administrador" type="submit" class="btn-st" style="margin-left:60px">cancelar</a>
                      <div id="loader">
                        <i class="fas fa-sync"></i>
                      </div>
                    </div>
                  </div>
                </form>
	  		  		</div>
	  		  	</div>
	  		  </div>
	  		</div>
      </div>
    </div>
  </div>

  <!-- All Script -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/isotope.pkgd.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/simplebar.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/jquery.animatedheadline.min.js"></script>
  <script src="/js/jquery.easypiechart.js"></script>
  <script src="/js/jquery.validation.js"></script>
  <script src="/js/tilt.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/main-demo.js"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

</body>

</html>
<style>
/* .editarPerfilCliente{
  background-color: #0E0F10;
  margin-left: 120px;
} */
</style>