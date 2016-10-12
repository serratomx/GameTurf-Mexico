@extends('site.layouts.main')
@section('title', 'Productos y Servicios')
@section('content')
<div class="app-services">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <div class="questions-container col-xs-12 col-sm-3">
            <article>
              <header>
                <h3 class="title">Cotiza tu proyecto</h3>
              </header>
              <div class="content">
                <p>Quieres saber cuánto te costará realizar tu proyecto?</p>
                <p>Tienes dudas sobre el producto?</p>
                <p>Contacta con nosotros y te ayudaremos con lo que necesites!</p>
                <a href="{!! URL::to('/contacto') !!}" class="btn btn-green">Cotizador express</a>
              </div>
            </article>
          </div>
          <div class="services-container col-xs-12 col-sm-9">
            <article class="item">
              <header>
                <h2 class="title"><b>Construcción</b> <br/>y diseño</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-1.png') !!}" class="thumbnail" />
                <p>Contamos con un equipo especializado de arquitectos e ingenieros civiles con una amplia experiencia en el diseño y construcción de espacios deportivos, desde canchas pequeñas, hasta los mas grandes complejos deportivos a nivel internacional.</p>
              </div>
            </article>
            <article class="item">
              <header>
                <h2 class="title"><b>Pasto sintético</b> <br/>deportivo</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-2.png') !!}" class="thumbnail" />
                <p>Tenemos la mejor superficie para realizar cualquier deporte. Nuestros pastos sintéticos son ideales para que realices cualquier deporte, pues estan fabricados con la mas nueva tecnología y diseñados para cumplir con todas las normas y requisitos que exigen los espacios deportivos.</p>
              </div>
            </article>
            <article class="item">
              <header>
                <h2 class="title"><b>Pasto sintético</b> <br/>residencial</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-3.png') !!}" class="thumbnail" />
                <p>Actualmente nos encontramos ante una situación crítica en cuanto a recursos naturales se refiere, es por ellos que debemos buscar alternativas amigables con la ecología, además de buscar elementos sustentables y que permitan el ahorro de un recurso tan vital como lo es el agua.<br/>  De la misma manera, se buscan medios que permitan un desempeño similar al pasto natural, pero sin los costos tan altos de mantenimiento y consumo de agua.</p>
              </div>
            </article>
            <article class="item">
              <header>
                <h2 class="title"><b>Stick Turf</b> <br/>pegamento para pasto sintético</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-4.png') !!}" class="thumbnail" />
                <p>Nuestro pegamento, es fabricado por empresas líderes en el mercado de adhesivos industriales de alta calidad, éstas empr esas han confiado en nuestra marca de Pasto Sintético y nos han ayudado a posicionarnos como la mejor opción en todo el país, así como también nos han auxiliado en el desarr ollo de nuevas tecnologías para la creación de nuevos productos, más eficientes, seguros y rápidos de utilizar; todo con la única finalidad de brindarle al usuario final una instalación rápida y sin ningún tipo de c omplicaciones.ar su césped de manera rápida y sin ningún tipo de complicación.</p>
              </div>
            </article>
            <article class="item">
              <header>
                <h2 class="title"><b>Follaje</b> <br/>Hechos de PVC, con una durabilidad de 10 años,</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-5.png') !!}" class="thumbnail" />
                <p>El follaje sintético embellece cualquier pared, fachada, reja, escenario, etc. Además brinda privacidad al cambiar favorablemente el ambiente, donde disfrutarás al máximo de tu estancia.<br/>  Lo manejamos en distintas versiones:<br/>  Mosaico: es ideal para aumentar la luminosidad y la atención al detalle. Todos los modelos dan una apariencia fr ondosa y natural. Rollos o páneles: ideal para dar privacidad a las mallas ciclónicas o rejas. Es un producto económico y luce muy bien.</p>
              </div>
            </article>
            <article class="item">
              <header>
                <h2 class="title"><b>Productos complementarios</b> <br/>recomendados por Stick Turf</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-6.png') !!}" class="thumbnail" />
                <p>En GameTurf, somos conscientes de que la calidad es cla ve al momento de realizar un trabajo o proyecto, es por eso que sólo utilizamos y recomendamos el uso de productos que hemos probado en cuanto a eficacia y durabilidad. <br/>Así como nosotros, al utlizar productos de nuestra línea, estás asegurando que el proyecto a realizar tenga una desempeño y terminado con una calidad insuperable.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script src="{!! asset('public/assets/js/site/home/contact.js?v='.time()) !!}"></script>
@endsection