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
  <meta name="p:domain_verify" content="ec11261a4c136d24202fc2b084e5b3ec"/>
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
          <li class="{!! (!Route::is('site.home.advantages')) ?: 'current' !!}"><a href="{!! URL::to('/ventajas') !!}">VENTAJAS</a></li>
          <li class="{!! (!Route::is('site.home.productsAndServices')) ?: 'current' !!}">
            <a href="{!! URL::to('/servicios') !!}">PRODUCTOS Y SERVICIOS</a>
            <ul>
              <li><a href="{!! URL::to('/servicios#construccion') !!}">CONSTRUCCIÓN Y DISEÑO</a></li>
              <li><a href="{!! URL::to('/servicios#pasto-sintetico-deportivo') !!}">PASTO SINTÉTICO DEPORTIVO</a></li>
              <li><a href="{!! URL::to('/servicios#pasto-sintetico-residencial') !!}">PASTO SINTÉTICO RESIDENCIAL</a></li>
              <li><a href="{!! URL::to('/servicios#stickturf') !!}">STICK TURF</a></li>
              <li><a href="{!! URL::to('/servicios#follaje') !!}">FOLLAJE</a></li>
              <li><a href="{!! URL::to('/servicios#productos-complementarios') !!}">PRODUCTOS COMPLEMENTARIOS</a></li>
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
    <div id="footer" class="col-xs-12 no-side-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="col-xs-12 no-side-padding text-center">
              <ul class="icon-list">
                <li>
                  <a href="https://www.facebook.com/pastosinteticoqro" target="__blank">
                    <span class="fa fa-facebook-square"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-instagram"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-linkedin"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-pinterest"></span>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/GameTurf_Qro" target="__blank">
                    <span class="fa fa-twitter"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-youtube-play"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-envelope-o"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fa fa-phone"></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 no-side-padding text-center">
              <div class="telephones-data">
                <span>442 2123012</span>
                <span>/ 442 2123224</span>
                <span>/ 442 4110848</span>
                <span>/ 01 800 134 37 37</span>
              </div>
              <div class="address-data">
                <span><a href="mailto:contacto@gameturfmexico.com">contacto@gameturfmexico.com</a></span>
                <span>/ Carlos Septién García #16 Col. Cimatario</span><br/>
                <span>Quéretaro , Quéretaro C.P 76030</span>
              </div>
            </div>
          </div>
        </div>
      </div>
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