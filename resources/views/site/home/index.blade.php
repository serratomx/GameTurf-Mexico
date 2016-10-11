@extends('site.layouts.main')
@section('content')
<!-- Banner -->
<section id="banner">
  <!--
  <header>
    <h2>Arcana: <em>A responsive site template freebie by <a href="http://html5up.net">HTML5 UP</a></em></h2>
    <a href="#" class="button">Learn More</a>
  </header>
  -->
</section>
<!-- Gigantic Heading -->
<section class="wrapper wrapper-header style1">
  <div class="container">
    <header class="major">
      <h2>La superficie sintética más real disponible</h2>
      <hr>
      <p>Nos dedicamos a la instalación de pasto sintético para distintos fines</p>
    </header>
  </div>
</section>
<!-- Highlights -->
<section class="wrapper wrapper-advantage style2">
  <div class="container">
    <div class="row 200%">
      <section class="4u 12u(narrower)">
        <div class="box highlight">
          <i class="icon major icon-person"></i>
          <h3>Confianza</h3>
          <p>Estamos certificados como los<br>mejores proveedores de pasto<br>sintético en la República<br>Mexicana.</p>
        </div>
      </section>
      <section class="4u 12u(narrower)">
        <div class="box highlight">
          <i class="icon major icon-check"></i>
          <h3>Servicio</h3>
          <p>Tenemos el personal más<br>calificado del país.<br>Mejoramos la calidad de vida en<br>espacios deportivos y<br>residenciales.</p>
        </div>
      </section>
      <section class="4u 12u(narrower)">
        <div class="box highlight">
          <i class="icon major icon-recycle"></i>
          <h3>Responsabilidad</h3>
          <p>Somos socialmente<br>responsables. Ahorramos en<br>recursos y utilizamos materiales<br>sintéticos sustentables.</p>
        </div>
      </section>
    </div>
  </div>
</section>
<!-- Posts -->
<section class="wrapper style1">
  <div class="container">
    <div class="row">
      <section class="6u 12u(narrower)">
        <div class="box post">
          <a href="#" class="image left"><img src="{!! asset('public/assets/img/img-sport-grass.png') !!}" alt="" /></a>
          <div class="inner">
            <h3>Deportivo</h3>
            <p>Nuestros pastos sintéticos son ideales para realizar cualquier deporte, ya que están fabricados con la más nueva tecnología.</p>
          </div>
        </div>
      </section>
      <section class="6u 12u(narrower)">
        <div class="box post">
          <a href="#" class="image left"><img src="{!! asset('public/assets/img/img-follaje.png') !!}" alt="" /></a>
          <div class="inner">
            <h3>Follaje</h3>
            <p>El follaje sintético embellece cualquier pared, fachada, reja, escenario, etc. Además brinda privacidad al cambiar favorablemente el ambiente, donde disfrutarás al máximo de tu estancia.</p>
          </div>
        </div>
      </section>
    </div>
    <div class="row">
      <section class="6u 12u(narrower)">
        <div class="box post">
          <a href="#" class="image left"><img src="{!! asset('public/assets/img/img-residential-grass.png') !!}" alt="" /></a>
          <div class="inner">
            <h3>Residenciales</h3>
            <p>Nada luce mejor que un jardín siempre verde. Buscamos la mejor calidad para crear un ambiente agradable, ahorrando en el consumo de agua y los costos de mantenimiento.</p>
          </div>
        </div>
      </section>
      <section class="6u 12u(narrower)">
        <div class="box post">
          <a href="#" class="image left"><img src="{!! asset('public/assets/img/img-stick-turf.png') !!}" alt="" /></a>
          <div class="inner">
            <h3>Stick-turf</h3>
            <p>Tenemos el mejor pegamento para pasto sintético en el mercado, fabricado con los más altos estándares que posibilitan una unión firme, flexible y duradera.</p>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>
<!-- CTA
<section id="cta" class="wrapper style3">
  <div class="container">
    <header>
      <h2>Are you ready to continue your quest?</h2>
      <a href="#" class="button">Insert Coin</a>
    </header>
  </div>
</section>
-->
<div class="app-contact">
  <div class="container">
    <div class="row">
      <section class="10u -1u 12u(narrower) 12u(mobilep)">
        <h3>Cotizador express</h3>
        {!! Form::open(['route' => 'site.contact.send', 'id' => 'contact-form', 'class' => 'contact-form']) !!}
          <div class="row 50%">
            <div class="6u 12u(mobilep)">
              <input type="text" name="contact[name]" id="contact-name" placeholder="Nombre" />
            </div>
            <div class="6u 12u(mobilep)">
              <input type="text" name="contact[use]" id="contact-use" placeholder="Uso" />
            </div>
            <div class="6u 12u(mobilep)">
              <input type="text" name="contact[telephone]" id="contact-telephone" placeholder="Teléfono" />
            </div>
            <div class="6u 12u(mobilep)">
              <input type="text" name="contact[square-meter]" id="contact-square-meter" placeholder="Metros cuadrados" />
            </div>
            <div class="6u 12u(mobilep)">
              <div class="12u">
                <input type="text" name="contact[company]" id="contact-company" placeholder="Empresa" />
              </div>
              <div class="12u">
                <input type="email" name="contact[email]" id="contact-email" placeholder="E-mail" />
              </div>
            </div>
            <div class="6u 12u(mobilep)">
              <textarea name="contact[message]" id="contact-message" placeholder="Mensaje" rows="5"></textarea>
            </div>
          </div>
          <div class="12u 12u(mobilep)">
            <ul class="actions pull-right">
              <li><button class="button">Enviar</button></li>
            </ul>
          </div>
        {!! Form::close() !!}
      </section>
    </div>
  </div>
</div>
<div class="app-sponsors wrapper style1">
  <div class="container">
    <div class="row">
      <section class="sponsors-container 12u 12u(narrower) 12(mobilep)">
        <div class="row 50%">
          <div class="sponsor sponsor-1">
            <img src="{!! asset('public/assets/img/img-sponsor-1.png') !!}" />
          </div>
          <div class="sponsor sponsor-2">
            <img src="{!! asset('public/assets/img/img-sponsor-2.png') !!}" />
          </div>
          <div class="sponsor sponsor-3">
            <img src="{!! asset('public/assets/img/img-sponsor-3.png') !!}" />
          </div>
          <div class="sponsor sponsor-4">
            <img src="{!! asset('public/assets/img/img-sponsor-4.png') !!}" />
          </div>
          <div class="sponsor sponsor-5">
            <img src="{!! asset('public/assets/img/img-sponsor-5.png') !!}" />
          </div>
          <div class="sponsor sponsor-6">
            <img src="{!! asset('public/assets/img/img-sponsor-6.png') !!}" />
          </div>
          <div class="sponsor sponsor-7">
            <img src="{!! asset('public/assets/img/img-sponsor-7.png') !!}" />
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection