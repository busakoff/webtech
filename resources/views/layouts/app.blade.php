<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
  	<meta name="description" content="SolMusic HTML Template">
  	<meta name="keywords" content="music, html">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<!-- Favicon -->
  	<link href="img/favicon.ico" rel="shortcut icon"/>

  	<!-- Google font -->
  	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

  	<!-- Stylesheets -->
  	<link rel="stylesheet" href="css/bootstrap.min.css"/>
  	<link rel="stylesheet" href="css/font-awesome.min.css"/>
  	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
  	<link rel="stylesheet" href="css/slicknav.min.css"/>

  	<!-- Main Stylesheets -->
  	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
    <div id="app">
      <!-- Header section -->
      <header class="header-section clearfix">
        <a href="index.html" class="site-logo">
          <img src="img/logo.png" alt="">
        </a>
        <div class="header-right">
          <div class="user-panel">
            <!---<a href="login.html" class="login">Войти</a>
            <span>|</span>
            <a href="signin.html" class="register">Создать аккаунт</a>-->

            @if (Route::has('login'))
                <div class="top-right links">
                  @guest
                          <a class="register" href="{{ route('login') }}">{{ __('Login') }}</a><span>|</span>
                      @if (Route::has('register'))
                              <a class="login" href="{{ route('register') }}">{{ __('Register') }}</a>
                      @endif
                  @else
                          <a id="navbarDropdown" class="login" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a><span>|</span>
                          <a class="register" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                          </form>
                  @endguest
                </div>
            @endif
          </div>
        </div>


        <ul class="main-menu">
          <li><a href="/">Home</a></li>
          <li><a href="/dance">Dances</a></li>
          <li><a href="{{route('contact')}}">Contacts</a></li>
          <li><a>.</a></li>
          <li><a href="/admin">Admin Panel</a></li>
        </ul>
      </header>
      <!-- Header section end -->

        <main>
            @yield('content')
        </main>

        <!-- Footer section -->
        <footer class="footer-section">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-5 order-lg-1">
                <img src="img/logo.png" alt="">
                <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <b>Address</b></br>st. Abay, 80</br> +7 (747) 590 07 09</br>dance.studio@gmail.com
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
              </div>
            </div>
          </div>
        </footer>
        <!-- Footer section end -->
    </div>
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
