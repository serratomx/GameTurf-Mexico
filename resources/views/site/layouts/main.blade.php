<!DOCTYPE HTML>
<!--
  Arcana by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GameTurf México | @yield('title', 'Pasto Sintético')</title>
  <!--[if lte IE 8]><script src="{!! asset('assets/js/ie/html5shiv.js') !!}"></script><![endif]-->
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/bootstrap.min.css?v='.time()) !!}">
  <link rel="stylesheet" href="{!! asset('public/assets/css/jquery.loading.css?v='.time()) !!}" />
  <link rel="stylesheet" href="{!! asset('public/assets/css/lightslider.css?v='.time()) !!}" />
  <link rel="stylesheet" href="{!! asset('public/assets/css/main.css?v='.time()) !!}" />
  <!--[if lte IE 8]><link rel="stylesheet" href="{!! asset('public/assets/css/ie8.css') !!}" /><![endif]-->
  <!--[if lte IE 9]><link rel="stylesheet" href="{!! asset('public/assets/css/ie9.css') !!}" /><![endif]-->
</head>
<body>
  <div id="page-wrapper">
    <!-- Header -->
    <div id="header">
      <!-- Logo -->
      <h1><a href="index.php" id="logo"><img src="{!! asset('public/assets/img/gameturfmexico-logo.png') !!}" class="logo"></a></h1>
      <div class="phone">
        <p><span class="fa fa-phone"></span>01800 1343737</p>
      </div>
      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li class="{!! (!Route::is('site.home.index')) ?: 'current' !!}"><a href="{!! URL::to('/') !!}">INICIO</a></li>
          <!--
          <li>
            <a href="#">Dropdown</a>
            <ul>
              <li><a href="#">Lorem dolor</a></li>
              <li><a href="#">Magna phasellus</a></li>
              <li><a href="#">Etiam sed tempus</a></li>
              <li>
                <a href="#">Submenu</a>
                <ul>
                  <li><a href="#">Lorem dolor</a></li>
                  <li><a href="#">Phasellus magna</a></li>
                  <li><a href="#">Magna phasellus</a></li>
                  <li><a href="#">Etiam nisl</a></li>
                  <li><a href="#">Veroeros feugiat</a></li>
                </ul>
              </li>
              <li><a href="#">Veroeros feugiat</a></li>
            </ul>
          </li>-->
          <li class="{!! (!Route::is('site.home.advantages')) ?: 'current' !!}"><a href="{!! URL::to('/ventajas') !!}">VENTAJAS</a></li>
          <li class="{!! (!Route::is('site.home.productsAndServices')) ?: 'current' !!}">
            <a href="{!! URL::to('/servicios') !!}">PRODUCTOS Y SERVICIOS</a>
            <ul>
              <li><a href="#">CONSTRUCCIÓN Y DISEÑO</a></li>
              <li><a href="#">PASTO SINTÉTICO DEPORTIVO</a></li>
              <li><a href="#">PASTO SINTÉTICO RESIDENCIAL</a></li>
              <li><a href="#">STICK TURF</a></li>
              <li><a href="#">FOLLAJE</a></li>
              <li><a href="#">PRODUCTOS COMPLEMENTARIOS</a></li>
            </ul>
          </li>
          <li class="{!! (!Route::is('site.home.gallery')) ?: 'current' !!}"><a href="{!! URL::to('/galeria') !!}">GALERÍA</a></li>
          <li class="{!! (!Route::is('site.home.downloads')) ?: 'current' !!}"><a href="{!! URL::to('/descargas') !!}">DESCARGAS</a></li>
          <li class="{!! (!Route::is('site.home.contact')) ?: 'current' !!}"><a href="{!! URL::to('/contacto') !!}">CONTACTO / COTIZADOR</a></li>
        </ul>
      </nav>
    </div>
    @yield('content')
    <!-- Footer -->
    <div id="footer">
      <!-- Icons 
      <ul class="icons">
        <li><a href="#" class="icon fa-twitter"></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
        <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
      </ul>
      -->
      <div class="wrapper copyright style1">
        <div class="container">
          <div class="row">
            <section class="12u 12u(narrower) 12u(mobilep)">
              <div class="6u -3u 10u(narrower) -1u(narrower) 8u(narrow) -2u(narrow) 12u(mobilep)">
                <div class="row 50%">
                  <div class="icon-list 12u 12u(narrower) 12u(mobilep)">
                    <div class="row 50%">
                      <div class="1u -2u -1u(mobilep)">
                        <a href="#">
                          <span class="fa fa-facebook-square"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-instagram"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-linkedin"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-pinterest"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-twitter"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-youtube-play"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-envelope-o"></span>
                        </a>
                      </div>
                      <div class="1u">
                        <a href="#">
                          <span class="fa fa-phone"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="8u -2u 10u(narrow) -1u(narrow) 10u(narrower) -1u(narrower) 10u(mobilep) -1u(mobilep)">
                <div class="row 50%">
                  <div class="telephone-list text-center 12u 12u(narrower) 12u(mobilep)">
                    <p>442 2123012 / 442 2123224 / 442 4110848 / 01 800 134 37 37</p>
                  </div>
                <div class="primary-email 12u">
                  <div class="text-center">
                    <p><a href="mailto:contacto@gameturfmexico.com">contacto@gameturfmexico.com</a>/ Carlos Septién García #16 Col. Cimatario</p>
                    <p>Quéretaro , Quéretaro C.P 76030</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- Copyright
    <div class="copyright">
      <ul class="menu">
        <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
      </ul>
    </div>
    -->
    </div>
  </div>
<!-- [START JavaScript Files] -->
  <script src="{!! asset('public/assets/js/jquery.min.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/bootstrap.min.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/jquery.loading.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/jquery.validate.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/jquery.dropotron.min.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/skel.min.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/util.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/lightslider.js?v='.time()) !!}"></script>
  <!--[if lte IE 8]><script src="{!! asset('public/assets/js/ie/respond.min.js?v='.time()) !!}"></script><![endif]-->
  <script src="{!! asset('public/assets/js/main.js?v='.time()) !!}"></script>
  <script src="{!! asset('public/assets/js/site/home/index.js?v='.time()) !!}"></script>
  @yield('scripts')
<!-- [END JavaScript Files] -->
</body>
</html>