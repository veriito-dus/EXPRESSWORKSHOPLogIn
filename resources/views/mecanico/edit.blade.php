<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>EXPRESSWORKSHOP - mecanico</title>
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
        <a href="/mecanico"><img src="/img/logo.png" alt=""></a>
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

    <div class="pt-home" style="background-image: url('/img/home-bg.png')">
      <div class="editarPerfilCliente">
        <div class="header-page mt-70 mob-mt">
          <h2>Pendiente</h2>
          <span></span>
        </div>
        <p class="text-center" style="color:#ffffff">{{$reservacion->producto}}</p>

        <div class="contact-form col-lg-12 col-sm-12 mt-70" style="padding-left: 38px">
          <form method="post" class="box contact-valid" action="{{route('jol.update',$reservacion->id)}}">
            @csrf
            @method('PUT')
            <h4>Observaciones</h4>
            <div class="row mt-0">
              <div class="col-lg-8 col-sm-12" style="margin-top: 0">
                <input type="hidden" name="user_id_mecanico" id="user_id_mecanico" value="{{auth()->user()->id}}">
                <input type="hidden" name="reserva_id" id="reserva_id" value="{{$reservacion->id}}">
                <textarea name="observaciones" id="observaciones" cols="80" rows="1" style="color:white"></textarea>
                {{-- <input type="text" name="producto" id="producto" value="{{$inventario->producto}}" class="form-control" placeholder="Ingrese el Nombre Producto"> --}}
              </div>
              <div class="col-lg-3 col-sm-12" style="margin-top:80px">
                <button type="submit" class="btn-st">Guardar</button>
                <a href="/mecanico#pendienteMecanico" type="submit" class="btn-st" style="margin-left:60px">cancelar</a>
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