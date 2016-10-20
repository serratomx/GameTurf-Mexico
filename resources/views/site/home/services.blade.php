@extends('site.layouts.main')
@section('title', 'Productos y Servicios')
@section('content')
<div class="app-services">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 no-side-padding">
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
            <article id="construccion" class="item">
              <header>
                <h2 class="title"><b>Construcción</b> <br/>y diseño</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-1.png?v='.time()) !!}" class="thumbnail" />
                <p>Contamos con un equipo especializado de arquitectos e ingenieros civiles con una amplia experiencia en el diseño y construcción de espacios deportivos, desde canchas pequeñas, hasta los más grandes complejos deportivos a nivel internacional.</p>
              </div>
            </article>
            <article id="pasto-sintetico-deportivo" class="item">
              <header>
                <h2 class="title"><b>Pasto sintético</b> <br/>deportivo</h2>
              </header>
              <div class="content col-xs-12 no-side-padding">
                <div class="col-xs-12 no-side-padding">
                  <img src="{!! asset('public/assets/img/img-services-2.png?v='.time()) !!}" class="thumbnail" />
                  <p>Tenemos la mejor superficie para realizar cualquier deporte. <br/>Nuestros pastos sintéticos son ideales para que realices cualquier deporte, pues están fabricados con la más nueva tecnología y diseñados para cumplir con todas las normas y requisitos que exigen los espacios deportivos.</p>
                </div>
                <div class="col-xs-12 no-side-padding table-container">
                  <div class="col-xs-12 no-side-padding">
                    <p>USOS:</p>
                    <p>El uso principal que se le da a los pastos que manejamos es:</p>
                    <br/>
                  </div>
                  <div class="col-xs-12 no-side-padding">
                    <div class="col-xs-4 no-side-padding">
                      <p>Fútbol 7</p>
                      <p>Fútbol Profesional</p>
                      <p>Cricket</p>
                      <p>Golf</p>
                    </div>
                    <div class="col-xs-4 no-side-padding">
                      <p>Fútbol 11</p>
                      <p>Tenis</p>
                      <p>Béisbol</p>
                      <p>Hockey</p>
                    </div>
                    <div class="col-xs-4 no-side-padding">
                      <p>Fútbol Rápido</p>
                      <p>Softball</p>
                      <p>Paddle</p>
                      <p>Fútbol Americano</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 no-side-padding">
                  <p>Y sus medidas son las siguientes:</p>
                </div>
                <div class="col-xs-12 no-side-padding table-container">
                  <div class="col-xs-12 no-side-padding table-head">
                    <div class="col-xs-3 no-side-padding">
                      <p><b>Futbol soccer 11</b></p>
                    </div>
                    <div class="col-xs-3 no-side-padding">
                      <p class="text-center"><b>Futbol 7</b></p>
                    </div>
                    <div class="col-xs-3 no-side-padding">
                      <p class="text-center"><b>Futbol rápido</b></p>
                    </div>
                    <div class="col-xs-3 no-side-padding">
                      <p class="text-center"><b>Futbol 5</b></p>
                    </div>
                  </div>
                  <div class="col-xs-12 no-side-padding table-body">
                    <div class="col-xs-3 no-side-padding">
                      <p>Largo máximo 120mt.</p>
                      <p>Ancho máximo 90mt.</p>
                      <p>Largo mínimo 90mt.</p>
                      <p>Ancho mínimo 45mt.</p>
                    </div>
                    <div class="col-xs-3 no-side-padding">
                      <p>Largo máximo  64 mt</p>
                      <p>Ancho máximo  40mt.</p>
                      <p>Largo mínimo 50mt.</p>
                      <p>Ancho mínimo 30 mt.</p>
                    </div>
                    <div class="col-xs-3 no-side-padding">
                      <p>Largo máximo 35mt.</p>
                      <p>Ancho máximo 18 mt.</p>
                      <p>Largo mínimo 24 mt.</p>
                      <p>Ancho mínimo 18 mt.</p>
                    </div>
                    <div class="col-xs-3 no-side-padding">
                      <p>Largo máximo 42mt.</p>
                      <p>Ancho máximo 25mt.</p>
                      <p>Largo mínimo 25mt.</p>
                      <p>Ancho mínimo 15 mt.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 no-side-padding">
                  <p>CARACTERÍSTICAS:</p>
                  <p>El pasto que manejamos, es fabricado con fibras de polietileno fabricadas por TenCate, en hilo fibrilado XP Pro y Monofilamento MS Pro de Thiolon, los cuales, además de ser de primera calidad, ofrecen mayor durabilidad y desempeño. <br/>Así podemos garantizar nuestros productos hasta por 9 años contra decoloración y degradación de la base, pues la misma esta hecha con la tecnología DuraBac Ultra.</p>
                </div>
                <div class="col-xs-12 no-side-padding table-container">
                  <div class="col-xs-12 no-side-padding table-head">
                    <div class="col-xs-4">
                      <p>Altura</p>
                    </div>
                    <div class="col-xs-4">
                      <p class="text-center">Peso</p>
                    </div>
                    <div class="col-xs-4">
                      <p class="text-center">Uso</p>
                    </div>
                  </div>
                  <div class="col-xs-12 no-side-padding table-body">
                    <div class="col-xs-4">
                      <p>20 mm - 30 mm</p>
                      <p>30 mm - 40 mm</p>
                      <p>40 mm - 50 mm</p>
                      <p>50 mm - 55 mm</p>
                    </div>
                    <div class="col-xs-4">
                      <p>800 gr/m2 - 1,275 gr/m2</p>
                      <p>800 gr/m2 - 1,020 gr/m2</p>
                      <p>800 gr/m2- 1,105 gr/m2</p>
                      <p>1,105 gr/m2 - 1,445 gr/m2</p>
                    </div>
                    <div class="col-xs-4 text-center">
                      <p>Tenis, Paddle, Hockey</p>
                      <p>Fútbol Rápido, Fútbol 7</p>
                      <p>Fútbol 7, Beisbol</p>
                      <p>Fútbol Soccer, Fútbol</p>
                      <p>Americano, Beisol</p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <article id="pasto-sintetico-residencial" class="item">
              <header>
                <h2 class="title"><b>Pasto sintético</b> <br/>residencial</h2>
              </header>
              <div class="content col-xs-12 no-side-padding">
                <div class="col-xs-12 no-side-padding">
                  <img src="{!! asset('public/assets/img/img-services-3.png?v='.time()) !!}" class="thumbnail" />
                  <p>Actualmente nos encontramos ante una situación crítica en cuanto a recursos naturales se refiere, es por ellos que debemos buscar alternativas amigables con la ecología, además de buscar elementos sustentables y que permitan el ahorro de un recurso tan vital como lo es el agua. <br/>De la misma manera, se buscan medios que permitan un desempeño similar al pasto natural, pero sin los costos tan altos de mantenimiento y consumo de agua.</p>
                </div>
                <div class="col-xs-12 no-side-padding table-container">
                  <div class="col-xs-12 no-side-padding">
                    <p>VENTAJAS:<p>
                    <p>Algunas de las grandes ventajas de usar pasto sintético residencial:</p>
                  </div>
                  <div class="col-xs-12 no-side-padding table-body">
                    <div class="col-xs-4 no-side-padding">
                      <p>Libre de riego</p>
                      <p>Anti-Insectos</p>
                    </div>
                    <div class="col-xs-4 no-side-padding">
                      <p>Libre de mantenimiento</p>
                      <p>Sin pesticidas</p>
                    </div>
                    <div class="col-xs-4 no-side-padding">
                      <p>Libre de fertilizantes</p>
                      <p>Fácil de limpiar</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 no-side-padding table-container">
                  <div class="col-xs-12 no-side-padding">
                    <p>USOS:<br/>
                    El uso principal que se le da a los pastos que manejamos es:</p>
                  </div>
                  <div class="col-xs-12 no-side-padding table-body">
                    <div class="col-xs-4 no-side-padding">
                      <p>Jardines</p>
                      <p>Parques y terrazas</p>
                      <p>Plazas públicas</p>
                    </div>
                    <div class="col-xs-4 no-side-padding">
                      <p>Áreas lúdicas</p>
                      <p>Jardines de niños</p>
                      <p>Áreas de juego</p>
                    </div>
                    <div class="col-xs-4 no-side-padding">
                      <p>Camellones</p>
                      <p>Balcones</p>
                      <p>Área de mascotas</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 no-side-padding table-container">
                  <div class="col-xs-12 no-side-padding">
                    <p>BENEFICIOS:</p>
                    <p>Nuestros pastos sintéticos brindan los siguientes beneficios:</p>
                    <br/>
                  </div>
                  <div class="col-xs-12 no-side-padding table-body">
                    <p>Sin costos de mantenimiento y jardinería</p>
                    <p>Es perfecto para todo tipo de clima</p>
                    <p>Resistente a los ambientes de luz solar o de sombra</p>
                    <p>Espacios siempre verdes</p>
                    <p>Amigable con el ambiente</p>
                    <p>100% reciclable</p>
                    <p>Jardines siempre verdes</p>
                    <p>Adaptable a cualquier superficie</p>
                    <p>Libre de pesticidas y quimicos dañinos</p>
                  </div>
                </div>
              </div>
            </article>
            <article id="stickturf" class="item">
              <header>
                <h2 class="title"><b>Stick Turf</b> <br/>pegamento para pasto sintético</h2>
              </header>
              <div class="content col-xs-12 no-side-padding">
                <img src="{!! asset('public/assets/img/img-services-4.png?v='.time()) !!}" class="thumbnail" />
                <p>Nuestro pegamento, es fabricado por empresas líderes en el mercado de adhesivos industriales de alta calidad, éstas empresas han confiado en nuestra marca de Pasto Sintético y nos han ayudado a posicionarnos como la mejor opción en todo el país, así como también nos han auxiliado en el desarrollo de nuevas tecnologías para la creación de nuevos productos, más eficientes, seguros y rápidos de utilizar; todo con la única finalidad de brindarle al usuario final una instalación rápida y sin ningún tipo de complicación.</p>
              </div>
            </article>
            <article id="follaje" class="item">
              <header>
                <h2 class="title"><b>Follaje</b> <br/>Hechos de PVC, con una durabilidad de 10 años</h2>
              </header>
              <div class="content">
                <img src="{!! asset('public/assets/img/img-services-5.png?v='.time()) !!}" class="thumbnail" />
                <p>El follaje sintético embellece cualquier pared, fachada, reja, escenario, etc. Además brinda privacidad al cambiar favorablemente el ambiente, donde disfrutarás al máximo de tu estancia. <br/>Lo manejamos en distintas versiones: <br/>Mosaico: es ideal para aumentar la luminosidad y la atención al detalle. Todos los modelos dan una apariencia frondosa y natural. <br/>Rollos o páneles: ideal para dar privacidad a las mallas ciclónicas o rejas. Es un producto económico y luce muy bien.</p>
              </div>
            </article>
            <article id="productos-complementarios" class="item">
              <header>
                <h2 class="title"><b>Productos complementarios</b> <br/>recomendados por Stick Turf</h2>
              </header>
              <div class="content col-xs-12 no-side-padding">
                <img src="{!! asset('public/assets/img/img-services-6.png?v='.time()) !!}" class="thumbnail" />
                <p>En GameTurf, somos conscientes de que la calidad es clave al momento de realizar un trabajo o proyecto, es por eso que sólo utilizamos y recomendamos el uso de productos que hemos probado en cuanto a eficacia y durabilidad. <br/>Así como nosotros, al utilizar productos de nuestra línea, estás asegurando que el proyecto a realizar tenga una desempeño y terminado con una calidad insuperable.</p>
                <br/>
                <p>RELLENO DE CAUCHO<br/>GameTurf colabora con empresas dedicadas al apoyo de la ecología con el uso de ma teriales reciclados de alta calidad, unos de nuestros proveedores mas grandes es Reciclaucho, empresa dedicada al tratamiento de Caucho, el cuál nos proporciona el granulado de caucho que usamos para el relleno de nuestros Pastos Sintéticos Deportivos, así como también para las superficies de seguridad para áreas de juegos, industrias y paisajismo.</p>
                <br/>
                <p>BANDA DE UNIÓN<br/>Es la línea que utilizamos y recomendamos para la unión de las alfombras de pasto sintético, y nos brinda una excelente opción para mantener el pasto sintético adherido a la base y la unión entre las partes de la alfombra de pasto.</p>
                <br/>
                <p>ARENA<p>
                <p>En GameTurf, usamos también derivados cerámicos y de mármol para la base de nuestros pastos sintéticos ya sean residenciales o deportivos, esto para brindar al pasto altura y peso para evitar que las condiciones climáticas provoquen un desgaste excesivo en el pasto sintético, por motivos técnicos deportivos, la base de arena se intercala bajo el revestimiento en ambientes deportivos y paisajísticos.</p>
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