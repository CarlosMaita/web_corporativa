@extends('common.main')

@section('title')
    <title>Home</title>
@endsection

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp


@section('content')
    {{-- header principal --}}
    @include('common.header')
 
    
    <!-- cover -->
    <section class="p-0">
        <div class="swiper-container swiper-container-half text-white"
          data-top-top="transform: translateY(0px);" 
          data-top-bottom="transform: translateY(250px);">
          <div class="swiper-wrapper">
            <div class="swiper-slide vh-100">
              <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada3.jpg')}})"></div>
              <div class="caption">
                <div class="container">
                  <div class="row justify-content-center vh-100">
                    <div class="col-md-8 align-self-center text-center">
                      <h1 data-swiper-parallax="-100%" class="display-3"><b>Distribuidores</b> de productos de consumo masivo.</h1>
                      <a href="/nosotros" class="btn btn-rounded btn-white px-5">Mas información</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-footer">
              <div class="container-fluid">
                <div class="row">
                  <div class="col text-center">
                    <div class="mouse"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / cover -->

      
    <!-- presentation -->
    <section class="section-lg">
        <div class="container">
          <div class="row text-center text-lg-left">
            <div class="col-12 col-lg-12">
              <div class="row">
                <div class="col-lg-9">
                  <h2>Distrialimentos del centro.</h2>
                  <p class="lead">Somos una empresa con más de 6 años distribuyendo productos de consumo masivo para la zona Centro – Occidente del Venezuela.</p>
                </div>
              </div>
              <div class="row gutter-0">
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="bordered rising p-3">
                    <i class="icon-product-hunt text-green fs-40 mb-3"></i>
                    <h4 class="mb-0">Productos</h4>
                    <p>Los mejores productos con marcas reconocidas en toda Venezuela.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                  <div class="bordered rising p-3">
                    <i class="icon-users2 text-green fs-40 mb-3"></i>
                    <h4 class="mb-0">Vendedores</h4>
                    <p>Atención personalizada con nuestro equipo de Venta en tu establecimiento.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                  <div class="bordered rising p-3">
                    <i class="icon-cart-plus text-green fs-40 mb-3"></i>
                    <h4 class="mb-0">Compras Online</h4>
                    <p>Podras tomar tus pedidos de forma Online con nuestra plataforma de compra.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300">
                  <div class="bordered rising p-3">
                    <i class="icon-truck2 text-green fs-40 mb-3"></i>
                    <h4 class="mb-0">Despacho</h4>
                    <p>Despacho garantizado a la puerta de su negocio en un plazo entre 48 y 72 horas.</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-12 col-lg-3 presentation presentation-responsive">
              <img class="left-25 vertical-align" src="images/demo/stock/plant.png" alt="Image">
            </div> --}}
          </div>
        </div>
      </section>
      <!-- / presentation -->

      
    <!-- gallery -->
    <section class="bg-light">
        <div class="container gallery">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <h2><b>Productos</b> para el mercado Venezolano.</h2>
              <p class="d-none d-sm-block">Cadenas de Supermercados, hipermercados, minimercados, panaderías, carnicerías, bodegones, restaurantes y demás empresas del ramo.</p>
            </div>
          </div>
          <div class="row mb-1" data-aos="fade-left">
            <div class="col-10">
              <div class="owl-carousel visible align-bottom" data-items="[2,2,2]" data-margin="10" data-loop="true" data-autoplay="true">
             @for ($i = 1 ; $i < 7; $i++)
              <figure class="photo equal @php if ($i%2 ==0) echo 'equal-short'; @endphp">
                <a href="{{asset('images/promo/promo'.$i.'.jpg')}}" 
                  style="background-image: url({{asset('images/promo/promo'.$i.'.jpg')}});">
                </a>
              </figure>
             @endfor
             
              </div>
            </div>
          </div>
          <div class="row justify-content-end" data-aos="fade-right">
            <div class="col-10">
              <div class="owl-carousel visible" data-items="[2,2,2]" data-margin="10" data-loop="true" data-autoplay="true" data-rtl="true">
                @for ($i = 7 ; $i < 13; $i++)
                  <figure class="photo equal @php if ($i%2 ==0) echo 'equal-short'; @endphp">
                    <a href="{{asset('images/promo/promo'.$i.'.jpg')}}" 
                      style="background-image: url({{asset('images/promo/promo'.$i.'.jpg')}});">
                    </a>    
                  </figure>
                @endfor
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
            <a href="/productos">
                <button type="button" class="btn btn-rounded btn-with-ico btn-green">Ver nuestros Productos <i class="icon-chevron-right2 fs-24"></i></button>
            </a>
            </div>
          </div>
        </div>
      </section>
      <!-- / gallery -->
  

        <!-- video -->
    <section class="separator-top">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-7">
              <img src="{{asset('images/cta/compras.jpg')}}" alt="">
            </div>
            <div class="col-md-4 text-center text-md-left">
              <span class="eyebrow mb-1 text-green">Atencion al cliente</span>
              <h2>Solicita un vendedor a tu negocio.</h2>
              <a href="https://api.whatsapp.com/send?phone=584244010776&text=Hola,%20quiero%20la%20atenci%C3%B3n%20de%20uno%20de%20sus%20vendedores%20a%20mi%20establecimiento.%20Gracias" class="btn btn-green btn-rounded">Solicitar atención</a>
            </div>
          </div>
        </div>
      </section>
      <!-- / video -->

        <!-- cta -->
    <section>
        <div class="image image-overlay image-scrolling" style="background-image:url({{asset('images/cta/productos.jpg')}})"
        data--100-bottom-top="transform: translateY(0%);" 
        data-top-bottom="transform: translateY(25%);"></div>
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-6 text-center text-white text-shadow">
              <span class="eyebrow mb-1">¿Más preguntas ?</span>
              <h2 class="display-4"><b>Nuestro equipo</b> via Whatsapp</h2>
              <a href="https://api.whatsapp.com/send?phone=584244010776&text=Gracias+por+comunicarte+con+Distrialimentos+Del+Centro+%C2%BFEn+que+podemos+servirte%3Fs" class="btn btn-white btn-rounded px-4">Iniciar conversación</a>
            </div>
          </div>
        </div>
      </section>
      <!-- / cta -->

      
    <!-- faq -->
    <section class="bg-light separator-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="accordion-group accordion-group-highlight" data-accordion-group>
                <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>QUIENES SOMOS</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Somos una empresa distribuidora de productos de consumo masivo, fundada bajo los cimientos de la experiencia en el sector con otras empresas especializadas en la distribución e importación de productos en el área del Food Service.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion open" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>UBICACIÓN</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Estamos ubicados en Valencia, Estado Carabobo.  Zona Industrial Sur, Centro Empresarial Arturo Michelena Local D8. <a href="">Ubicación en Google Map</a></p>
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
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="accordion-group accordion-group-highlight" data-accordion-group>

                <div class="accordion open" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>EXPERIENCIA</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Contamos con seis (6) años de experiencia en la distribución y comercialización de productos de consumo masivo en el sector de food service.</p>
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

                <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>ATENCION AL CLIENTE</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Podrás ser atendido por whatsapp, llamada, correo o presencial con nuestros vendedores.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / faq -->


    <!-- partners -->
        <div class="tab-pane show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
          <div class="component-example">
            <div class="container">
              <div class="row">
                <div class="col partners align-items-center">
                  <div class="owl-carousel" data-items="[6,4,2]" data-loop="true" data-autoplay="true">
                    @for ($i = 1; $i < 23; $i++)
                    <div class="logo">
                      <img src="{{ asset('images/marcas/marca'.$i.'.jpg') }}" alt="Logo">
                    </div>
                    @endfor
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- / partners -->

@endsection