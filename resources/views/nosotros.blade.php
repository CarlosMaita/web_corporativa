@extends('common.main')

@section('title')
    <!-- Primary Meta Tags -->
    <title>Distrialimentos del centro - Venezuela</title>
    <meta name="title" content="Distrialimentos del centro - Venezuela">
    <meta name="description" content="Somos una empresa distribuidora que te agiliza tus compras online  de productos de consumo masivo. ¡Realiza tus pedidos con Distrialimentos!">
    <meta name="keywords" content="distrialimentos del centro, distribuidores, pedidos al mayor en valencia, pedidos al mayor en carabobo, entregas de productos al mayor en carabobo">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://distrialimentosdelcentro.com/nosotros">
    <meta property="og:title" content="Distrialimentos del centro - Venezuela">
    <meta property="og:description" content="Somos una empresa distribuidora que te agiliza tus compras online  de productos de consumo masivo. ¡Realiza tus pedidos con Distrialimentos!">
    <meta property="og:image" content="{{asset('images/portada/home_2.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://distrialimentosdelcentro.com/nosotros">
    <meta property="twitter:title" content="Distrialimentos del centro - Venezuela">
    <meta property="twitter:description" content="Somos una empresa distribuidora que te agiliza tus compras online  de productos de consumo masivo. ¡Realiza tus pedidos con Distrialimentos!">
    <meta property="twitter:image" content="{{asset('images/portada/home_2.png')}}">

@endsection

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp

@section('content')
    {{-- header principal --}}
    @include('common.header')
 

  <!-- cover -->
  <section class="vh-60">
    <div class="image image-overlay" style="background-image:url({{asset('images/portada/home_2.png')}})"></div>
    <div class="container pt-10 ">
      <div class="row">
        <div class="col-6 text-white text-shadow d-md-block d-none">
          <h3 class="h1">Nosotros</h3>
          <h5 class="text-muted">Trabajamos para tu comodidad y la de tu familia</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- / cover -->



<!-- team -->
<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><b>Distrialimentos</b><br> del centro</h1>
      </div>
      <div class="col-md-6">
        <p class="lead">Somos una empresa encargada de la <b>distribución de productos de consumo masivo</b>, tanto nacionales como importados, con relación directa con los fabricantes para así garantizar el <b class="text-primary">precio más competitivo</b>.</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel visible" data-items="[3,2]" data-loop="true" data-margin="30" data-nav="true">
          <figure class="user">
            <a href="" class="user-photo">
              <img src="{{asset('images/portada/home_4.jpg')}}" alt="despacho">
            </a>
            <figcaption class="user-caption">
              <h4>Despacho</h4>
              <span>Entregas en 48 - 72 hrs</span>
            </figcaption>
          </figure>
          <figure class="user">
            <a href="" class="user-photo">
              <img src="{{asset('images/portada/home_2.png')}}" alt="compra online">
            </a>
            <figcaption class="user-caption">
              <h4>Comprar Online</h4>
              <span>Compra en línea con nuestra plataforma digital</span>
            </figcaption>
          </figure>
          <figure class="user">
            <a href="" class="user-photo">
              <img src="{{asset('images/portada/home_3.jpg')}}" alt="vendedores">
            </a>
            <figcaption class="user-caption">
              <h4>Vendedores</h4>
              <span>Contamos con más de 20 asesores comerciales</span>
            
            </figcaption>
          </figure>
          <figure class="user">
            <a href="" class="user-photo">
              <img src="{{asset('images/portada/home_1.jpg')}}" alt="entregas">
            </a>
            <figcaption class="user-caption">
              <h4>Entregas</h4>
              <span>Auto-Ventas para la entrega inmediata de mercancía</span>
             
            </figcaption>
          </figure>
          <figure class="user">
            <a href="" class="user-photo">
              <img src="{{asset('images/portada/home_5.jpg')}}" alt="ventas">
            </a>
            <figcaption class="user-caption">
              <h4>Ventas</h4>
              <span>Más de 2000 clientes que confian en nuestro servicio</span>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / team -->



<section class="bg-light pt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="lead">Llegar a cada rincón de Venezuela, con <b>los estándares más altos de calidad</b> en la comercialización y distribución de productos consumo masivo.</p>
      </div>
      <div class="col-md-6">
        <h1>Nuestro<br> <b>PROPOSITO</b></h1>
      </div>
    </div>
 </div>
</section>




{{-- como trabajamos --}}
<section class="bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <h1>Como <b>TRABAJAMOS</b></h1>
        <p>En <b class="text-blue">Distrialimentos Del Centro</b> trabajamos con pasión y entrega para cumplir con cada pedido en cada rincón de nuestros territorio.</p>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="owl-carousel owl-carousel-single" data-dots="true" data-nav="false" data-autoplay="true">
              <figure class="photo">
                <img src="{{asset('images/portada/home_4.jpg')}}" alt="Image">
              </figure>
              <figure class="photo">
                <img src="{{asset('images/portada/home_3.jpg')}}" alt="Image">
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="accordion-group accordion-group-steps" data-accordion-group>
          <div class="accordion open" data-accordion>
            <div class="accordion-control" data-control>
              <h5>Diariamente</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Nos levantamos día a día para cumplir con cada pedido en cada rincón de nuestros territorio</p>
              </div>
            </div>
          </div>
          <div class="accordion" data-accordion>
            <div class="accordion-control" data-control>
              <h5>Equipo comercial</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Nuestro equipo comercial se moviliza a diario por cada una de sus rutas de trabajo conversando cara a cara con nuestros clientes, para generar una asesoría personalizada.</p>
              </div>
            </div>
          </div>
          <div class="accordion" data-accordion>
            <div class="accordion-control" data-control>
              <h5>Oficinas</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Nuestro capital humano en oficina entrega lo mejor de sí para que la operación logística se cumpla en el menor tiempo posible y garantizar la excelencia en los despachos y tiempos de entrega. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="bg-light">
  <div class="container">
    <div class="row justify-content-between">

      <div class="col-12 col-lg-7">
        <ul class="masonry gallery gutter-2">
          <li class="col-md-6">
            <div class="boxed bg-primary text-white rising p-4">
              <i class="icon-users fs-50 mb-2"></i>
              <h4>Equipo Comercial</h4>
              <p>Contamos con más de <b>veinte (+20)</b> asesores comerciales que se moviliza a diario por cada una de las rutas de trabajo.</p>
            </div>
          </li>
          <li class="col-md-6 mt-md-5">
            <div class="boxed rising p-4">
              <i class="icon-map-pin2 fs-50 mb-2"></i>
              <h4>Alcance</h4>
              <p>Cinco (5) territorios de alcance en la zona Centro Occidente del país. Carabobo, Aragua, Falcon, Yaracuy y Lara.</p>
            </div>
          </li>
          <li class="col-md-6">
            <div class="boxed rising p-4">
              <i class="icon-users2 fs-50 mb-2"></i>
              <h4>Clientes</h4>
              <p>Contamos con más de dos mil (+2000) clientes. Movilizamos más de diez mil (+10.000) cajas al mes a lo largo de todo nuestro territorios.</p>
            </div>
          </li>
          <li class="col-md-6">
            <div class="boxed rising p-4">
              <i class="icon-percent2 fs-50 mb-2"></i>
              <h4>Cartera comercial</h4>
              <p>Tenemos una activación superior al 75% de nuestra cartera comercial.</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="col-12 col-lg-4 align-self-center text-center text-md-left">
        <h2 class="h1"><b>Trabaja</b> con nosotros</h2>
        <p>Quieres ser parte del equipo comercial de Distrialimentos Del Centro.<br></p>
        <a href="mailto:mercadeo.distrialimentos@gmail.com " type="button" class="btn btn-primary btn-rounded mt-2 px-5">Enviar Currículo</a>
      </div>
    </div>
  </div>
</section>



   <!-- cover -->
   <section class="pb-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center p-2">
          <h1 data-swiper-parallax="-100%" class="display-5">Nuestros <b>Socios Comerciales</b></h1>
          <h5>Encuentra los productos de las principales marcas del país en nuestra <b>Plataforma de Compra Online</b></h5>
          <a href="https://distrialimentos.morelynx.com/home.aspx" class="btn btn-blue btn-rounded px-5">Ir a la Plataforma</a>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="250">
        <div class="col">
          <div class="owl-carousel visible gallery align-bottom" data-items="[4,2,2]" data-margin="20" data-loop="true" data-autoplay="true">
           
            @for ($i = 1 ; $i < 25; $i++)
            <figure class="photo equal">
              <a href="{{asset('images/marcas/marca'.$i.'.jpg')}}" 
                style="background-image: url({{asset('images/marcas/marca'.$i.'.jpg')}});">
              </a>
            </figure>
           @endfor
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / cover -->

  
<style>
  .tile .tile-content::before {
    background:none;
  }
</style>

 <!-- blog -->
 <section class="bg-light">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-6 text-center">
         <h2>Algunas de nuestras <b>Lineas de productos</b></h2>
       </div>
     </div>
     <div class="row mb-1">
       <div class="col">
         <ul class="masonry row gutter-1">
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile" style="background: none">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-enlatados.jpg')}})"></div>
               <a href="/productos" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1 text-white">Enlatados</span>
                   <h3>Completa recetas con nuestros productos enlatados.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile tile-long">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-snacks.jpg')}})"></div>
               <a href="/productos" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1 text-white">Snack</span>
                   <h3>Ideal para compartir con familiares y amigos.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-pasta.jpg')}})"></div>
               <a href="/productos" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1 text-white">Pastas, harinas y azucares</span>
                   <h3>Los mejores pasta y harinas para tus almuerzos.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile tile-long">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-lacteos.jpg')}})"></div>
               <a href="/productos" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1 text-white">Lacteos</span>
                   <h3>Bebidas lácteas para toda la familia.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile tile-long">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-galletas.jpg')}})"></div>
               <a href="/productos" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1 text-white">Galletas, tortas y ponqués</span>
                   <h3>Para consentir a los más pequeños y a la familia.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-viveres.jpg')}})"></div>
               <a href="/productos" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1 text-white">Viveres</span>
                   <h3>Para Refrescar y compartir.</h3>
                 </div>
               </a>
             </article>
           </li>
         </ul>
         
       </div>
     </div>
     <div class="row" data-aos="fade-up">
       <div class="col text-center">
         <a href="/productos" class="btn btn-block btn-lg btn-blue">Ver Productos</a>
       </div>
     </div>
   </div>
 </section>
 <!-- / blog -->
 
 
 <!-- faq -->
 <section class="bg-light separator-top">
  <div class="container">
    <div class="row">
      <div class="col text-center">
          <h1>Más información de <b>Distrialimentos del centro</b></h1>
      </div>
    </div>
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 pr-md-4">
       
        <div class="accordion-group accordion-group-highlight" data-accordion-group>
          <div class="accordion" data-accordion data-aos="fade-up">
            <div class="accordion-control" data-control>
              <h5>QUIENES SOMOS</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                 <p>Somos una empresa distribuidora de consumo masivo, fundada bajo los cimientos de la experiencia en el sector, producto de más de seis (6) años de trabajo con otras empresas especializadas en la distribución e importación de productos en el área del Food Service, para cadenas de Supermercados, hipermercados, mini-mercados, panaderías, carnicerías, bodegones, restaurantes y otras empresas de la industria. </p> 
              </div>
            </div>
          </div>
         
          <div class="accordion open" data-accordion data-aos="fade-up">
            <div class="accordion-control" data-control>
              <h5>VISIÓN</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Convertirnos en una de las principales compañías de distribución e importación de consumo masivo de alta calidad, para así obtener presencia en todo el territorio nacional, fortaleciendo lazos con nuestros proveedores a nivel nacional e internacional, con nuevas marcas en mercado nacional. </p>
              </div>
            </div>
          </div>

          <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <div class="accordion-control" data-control>
              <h5>UBICACIÓN</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Estamos ubicados en Valencia, Estado Carabobo.  Zona Industrial Sur, Centro Empresarial Arturo Michelena Local D8. <a target="_black" href="https://www.google.com/maps/place/Centro+Empresarial+Arturo+Michelena/@10.1572271,-67.9439393,17z/data=!4m5!3m4!1s0x8e80687b7be5b9c9:0xd9533b642fdbcd8a!8m2!3d10.1587618!4d-67.9423248">Ubicación en Google Map</a></p>
              </div>
            </div>
          </div>

          <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <div class="accordion-control" data-control>
              <h5>HORARIOS</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Nuestro horario de atención en oficina es de lunes a viernes de 8:00 AM a 5:00 PM.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-6  pr-md-4">
        <div class="accordion-group accordion-group-highlight" data-accordion-group>
        <div class="accordion open" data-accordion data-aos="fade-up">
          <div class="accordion-control" data-control>
            <h5>MISIÓN</h5>
          </div>
          <div class="accordion-content" data-content>
            <div class="accordion-content-wrapper">
              <p>Contribuir y aportar al mercado venezolano variedad y calidad de productos de alto valor, fortaleciendo nuestro estilo de negocio, distribución y venta apoyándonos con marcas de reconocimiento nacional e internacional en el área de consumo masivo. </p>
            </div>
          </div>
        </div>


        <div class="accordion" data-accordion data-aos="fade-up">
          <div class="accordion-control" data-control>
            <h5>DISTRIBUCIÓN</h5>
          </div>
          <div class="accordion-content" data-content>
            <div class="accordion-content-wrapper">
              <p>Actualmente estamos en la zona Centro – Occidente del país, distribuyendo en los estados Carabobo, Aragua, Falcón y próximamente en otros estados del territorio nacional, contamos con un equipo de vendedores capacitados para atender las necesidades de nuestros clientes.</p>
            </div>
          </div>
        </div>

        <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
          <div class="accordion-control" data-control>
            <h5>TIEMPOS DE DESPACHO</h5>
          </div>
          <div class="accordion-content" data-content>
            <div class="accordion-content-wrapper">
              <p>Despacho garantizado a la puerta de su establecimiento en un plazo entre cuarenta y ocho (48) a setenta y dos (72) horas.</p>
            </div>
          </div>
        </div>

        <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
          <div class="accordion-control" data-control>
            <h5>EXPERIENCIA</h5>
          </div>
          <div class="accordion-content" data-content>
            <div class="accordion-content-wrapper">
              <p>Contamos con seis (6) años de experiencia en la distribución y comercialización de productos de consumo masivo en el sector de food service.</p>
            </div>
          </div>
        </div>
        

      </div>
    </div>
    </div>
  </div>
</section>
<!-- / faq -->

    
<section class="pb-2 bg-blue text-white">
    <div class="container">
      <div class="row justify-content-center">
        
        <div class="col-md-10 text-center">
          <h1>Solicita nuestro <b>Catálogo de productos</b></h1>
          <a href="{{ asset('pdf/catalogo_distrialimentos_del_centro.pdf') }}" class="btn btn-lg btn-primary btn-rounded mt-2 py-2 px-7">Solicitar catalogo</a>
        </div>
       
      </div>
    </div>
  </section>

@endsection