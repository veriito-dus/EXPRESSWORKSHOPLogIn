<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EXPRESSWORKSHOP @yield('title')</title>
  <!-- <link rel="stylesheet" href="css/plugins/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/plugins/font-awesome.css">
  <link rel="stylesheet" href="css/plugins/jquery.animatedheadline.css">
  <link rel="stylesheet" class="back-color" href="css/style-dark.css">
  <link rel="stylesheet" class="posit-nav" href="css/settings/left-nav.css" />
  <link rel="stylesheet" class="theme-color" href="css/settings/red-color.css" />
  <link rel="icon" href="img/logo.ico" />

  
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

    <!-- Left Block -->
    <nav class="header-main">

      <!-- Logo -->
      <div class="logo">
        <a href="{{url('/')}}"><img src="img/logo.png" alt=""></a>
      </div>
    </nav>

    <!-- Home Section -->
    <div class="pt-home" style="background-image: url('img/home-bg.png')">
      <section>
        <!-- Banner -->
        @yield('content')
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
  </div>
  <!-- All Script -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.animatedheadline.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
<style>
  .iniciarSesion {
    background: rgba(14, 15, 16, .6);
    border-radius: 30px;
    cursor: pointer;
    border: none;
    color: white;
    width: auto;
    font-size: 20px;
    padding: 15px 30px;
    margin-top: 30px;
  }

  .iniciarSesion:hover {
    color: #d94c48;
  }

  .logIn-contenedor {
    align-items: center;
    display: flex;
    justify-content: center;
    height: 100%;
    width: 100%;
  }

  .logIn {
    background-color: rgba(255, 255, 255, 0);
    border-radius: 25px;
    font-family: sans-serif;
    text-align: center;
    line-height: 1;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    max-width: 50%;
    max-height: 50%;
    padding: 20px 40px;
    /* box-shadow: 2px 2px 5px #999; */
    box-shadow: 2px 2px 5px white;
  }

  .formLogIn {
    display: grid;
    grid-template: 100%;
    margin-top: 50px;
    height: auto;
    width: auto;
  }

  input[type="text"],
  [type="password"],[type="email"] {
    background: rgba(14, 15, 16, .6);
    border: none;
    border-radius: 20px;
    color: white;
    border: 1.5px solid rgba(14, 15, 16, .6);
    text-align: center;
    padding: 8px 40px;
    height: auto;
    /* width: 200px; */
  }

  .logIn-contraseña {
    margin-top: 20px;
  }

  .ingresar {
    background: rgba(14, 15, 16, .6);
    border-radius: 30px;
    cursor: pointer;
    border: none;
    color: white;
    width: auto;
    font-size: 18px;
    padding: 5px 30px;
    margin-top: 30px;
  }

  .ingresar:hover {
    color: #d94c48;
    /* padding: 7px 32px; */
    font-size: 20px;

  }

  .logIn-texto {
    margin-top: -85px;
    padding: 0;
    text-align: center;
  }

  .iconoUser {
    margin: 0;
    padding: 0;
    width: 20%;
  }

  .logIn-boton {
    margin-bottom: 10px;
  }

  .account-logIn {
    margin: 0 auto;
    align-items: center;
    text-align: center;
    margin-top: 15px;
  }
  .account-logIn-boton{
    cursor: pointer;
    margin-left:10px
  }
  #errorLogIn{
    color: red;
    font-size: 12px;
    margin-top: 5px;
    padding: 4px 10px;
    width: auto;
    background: #ffe5e4de;
    border: none;
    border-radius: 10px;
    border: 1px solid red;

  }

  .account-contenedor {
    align-items: center;
    display: flex;
    justify-content: center;
    height: 100%;
    width: 100%;
    margin-top: 85px
  }

  .account {
    background-color: rgba(255, 255, 255, 0);
    border-radius: 25px;
    font-family: sans-serif;
    text-align: center;
    line-height: 1;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    max-width: 80%;
    max-height: 50%;
    padding: 20px 20px;
    /* box-shadow: 2px 2px 5px #999; */
    box-shadow: 2px 2px 5px white;

  }

  .formAccount {
    /* display: grid;
    grid-template-columns: 50% 50%; */
    /* grid-gap: 10px; */
    width: 100%;
    margin-top: 50px;
  }

  .formAccount-contenedor {
    display: grid;
    grid-template-columns: 50% 50%;
    grid-gap: 10px;
    width: 100%;
    margin-top: 20px;
  }

  .account-sesion {
    grid-row: 1;
  }

  .account-texto {
    margin-top: -105px;
    padding: 0;
    text-align: center;
  }

  .iconoAccount {
    margin: 0;
    padding: 0;
    width: 14%;
  }
  @media (max-width: 446px) {
    input[type="text"],
  [type="password"],[type="email"] {
    padding: 8px 20px;
  }
  }
  @media (max-width: 675px) {
    .formAccount-contenedor {
      display: grid;
      grid-template-columns: 100%;
    }
  }

</style>