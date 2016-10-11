@extends('site.layouts.main')
@section('title', 'Ventajas')
@section('content')
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
<div class="app-our-clients">
  <section>
    <div class="container">
      <div class="row">
        <article class="intro">
          <div class="col-xs-12 header">
            <header>
              <h2 class="title">Nuestros clientes</h2>
            </header>
          </div>
        </article>
      </div>
    </div>
    <div class="carousel-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="col-xs-10 col-xs-offset-1">
              <ul id="carousel-our-clients" class="lightslider cs-hidden">
                <li class="item item-1"></li>
                <li class="item item-2"></li>
                <li class="item item-3"></li>
                <li class="item item-4"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@section('scripts')
  <script src="{!! asset('public/assets/js/site/home/contact.js?v='.time()) !!}"></script>
@endsection