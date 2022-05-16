<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>EXPRESSWORKSHOP - Administrador</title>
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
        <div id="inventario">
          <div id="miembros">
            <div id="contact">

              <div class="header-mobile">
                <a class="header-toggle"><i class="fas fa-bars"></i></a>
                <h2>EXPRESSWORKSHOP</h2>
              </div>

              <nav class="header-main" data-simplebar>

                <div class="logo">
                  <a href="/administrador"><img src="img/logo.png" alt=""></a>
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
                  <li data-tooltip="Reservas" data-position="top">
                    <a href="#contact" class="icon-a fas fa-book-open"></a>
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

              <!-- Home Section -->
              <div class="pt-home" style="background-image: url('img/home-bg.png')">
                <section>

                  <div class="banner">
                    <h1>Bienvenido a</h1>
                    <h1>EXPRESSWORKSHOP</h1>
                  </div>

                </section>
              </div>

              <!-- Peril Section -->
              <div class="page pt-about" data-simplebar>
                <section class="container">

                  <div class="header-page mt-70 mob-mt">
                    <h2>Mi Perfil</h2>
                    <span></span>
                  </div>

                  <div class="row mt-100">
                    <div class="col-lg-12 col-sm-12">
                      <div class="info box">
                        <div class="row">

                          <div class="col-lg-3 col-sm-4">
                            <div class="photo">
                              <img alt="" src="img/user-photo.jpg">
                            </div>
                          </div>

                          <div class="col-lg-3 col-sm-4">
                            <div class="info-icon">
                              <div class="desc-icon">
                                <h4 style="padding-bottom: 10px;">Sergio Prieto</h4>
                                <div style="display:flex">
                                  <div class="locAdmin">
                                    Telefono:
                                  </div>
                                  <div class="locAdmin-texto">
                                    3174469814
                                  </div>
                                </div>
                                <div style="display:flex">
                                  <div class="locAdmin">
                                    Direccion:
                                  </div>
                                  <div class="locAdmin-texto">
                                    3174469814
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
                                    3174469814
                                  </div>
                                </div>
                                <a href="/editarAdmin" class="btn-st" style="margin-top:20px">Modificar</a>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Vehiculos Section -->
              <div class="page pt-resume" data-simplebar>
                <section class="container">

                  <div class="header-page mt-70 mob-mt">
                    <h2>Vehiculos</h2>
                    <span></span>
                  </div>

                  <div class="row mt-100">
                    <div class="col-lg-12 col-sm-12">
                      <div class="experience box" style="margin-bottom:20px">

                        <div class="item">
                          <div class="main">
                            <h4 style="margin-bottom:20px"> Historial de Vehiculos Registrados</h4>
                            <div class="tabla-reserva" style="">
                              <table  style="margin:auto; width:100%;">
                                <thead class="">
                                  <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Placa</th>
                                    <th>Mecanico</th>
                                    <th>Tipo de mantenimiento</th>
                                    <th>Observaciones</th>
                                    <th>Fecha</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
              </div>

              <!-- Inventario Section -->
              <div class="page pt-portfolio" data-simplebar>
                <section class="container">

                  <div class="header-page mt-70 mob-mt">
                    <h2>Inventario</h2>
                    <span></span>
                  </div>

                  <div class="row mt-60">
                    <div class="col-lg-12 col-sm-12">
                      <div class="experience box" style="margin-bottom:20px">

                        <div class="item">
                          <div class="main">
                            <h4 style="margin-bottom:20px">Inventarios</h4>
                            <div class="tabla-reserva" style="">
                              <table  style="margin:auto; width:100%;">
                                <thead class="">
                                  <tr>
                                    <th>#</th>
                                    <th>Nombre Producto</th>
                                    <th>Marca</th>
                                    <th>Cantidad</th>
                                    <th>Tiempo de uso</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </section>
              </div>

              <!-- Blog Section -->
              <div class="page pt-blog" data-simplebar>
                <section class="container">

                  <div class="header-page mt-70 mob-mt">
                    <h2>Miembros</h2>
                    <span></span>
                  </div>

                  <div class="row blog-masonry mt-100 mb-50">
                    <div class="col-lg-4 col-sm-4">
                      <div class="blog-item">
                        <div class="thumbnail">
                          <img alt="" src="img/blog/img-4.png">
                        </div>
                        <h4>Pepito Perez</h4>
                        <p style="text-align:center">Pepipe</p>
                        <p style="text-align:center">3254001512</p>
                        <p style="text-align:center">Cliente</p>
                        <div class="blog-btn">
                          <p style="color:#d94c48"><b>Placas vehiculos</b></p>
                          <ul>
                            <li>ZME 252</li>
                            <li>PGW 79E</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                      <div class="blog-item">
                        <div class="thumbnail">
                          <img alt="" src="img/blog/img-4.png">
                        </div>
                        <h4>Sergio Alejandro Prieto</h4>
                        <p style="text-align:center">SergioPri</p>
                        <p style="text-align:center">316954152</p>
                        <p style="text-align:center">Cliente</p>
                        <div class="blog-btn">
                          <p style="color:#d94c48"><b>Placas vehiculos</b></p>
                          <ul>
                            <li>ZME 252 </li>
                            <li>PGW 79E</li>
                            <li>QWB 126</li>
                            <li>EQK 22B</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                      <div class="blog-item">
                        <div class="thumbnail">
                          <img alt="" src="img/blog/img-4.png">
                        </div>
                        <h4>Veronica Dussan Parra</h4>
                        <p style="text-align:center">VeriitoDuss</p>
                        <p style="text-align:center">317454152</p>
                        <p style="text-align:center">Trabajador</p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Blog Section -->
              <div class="page pt-contact" data-simplebar>
                <section class="container">

                  <div class="header-page mt-70 mob-mt">
                    <h2>Reservas</h2>
                    <span></span>
                  </div>

                  <div class="row mt-60">
                    <div class="col-lg-12 col-sm-12">
                      <div class="experience box" style="margin-bottom:20px">
                        <div class="item">
                          <div class="main">
                            <h4 style="margin-bottom:20px">Reservas relizadas</h4>
                            <div class="tabla-reserva" style="">
                              <table  style="margin:auto; width:100%;">
                                <thead class="">
                                  <tr>
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Placa</th>
                                    <th>Usuario</th>
                                    <th>Tipo de mantenimiento</th>
                                    <th>Recepcionista</th>
                                    <th>Estado</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                    <td>enero</td>
                                    <td>enero</td>
                                    <td>3000</td>
                                    <td>3000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
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