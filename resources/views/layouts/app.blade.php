<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - Laravel</title>
</head>
<body>
  <nav>
    <div>
      <p>my aplication</b></p>
    </div>
    <ul>
      @if (auth()->check())
      <li>
        <p>welcome <b>{{auth()->user()->name}}</b></p>
      </li>
      <li>
        <a href="{{url('/logOut')}}">LogOut</a>
      </li>
      @else
        <li>
          <a href="{{url('/logIn')}}">LogIn</a>
        </li>
        <li>
          <a href="{{url ('/register')}}">Register</a>
        </li>
      @endif
      
    </ul>
  </nav>
  @yield('content')
</body>
</html>