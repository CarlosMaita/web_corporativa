@extends('common.main')

@section('title')
  <!-- Primary Meta Tags -->
<title>Distrialimentos del centro -  Consumo Masivo</title>
<meta name="title" content="Distrialimentos del centro -  Consumo Masivo">
<meta name="description" content="Distrialimentos del Centro una empresa líder en la distribución y comercialización de productos de consumo masivo para el sector alimenticio en Valencia.">
<meta name="keywords" content="Distrialimentos del Centro, distribución, productos de consumo masivo en valencia, distribucion de alimentos en venezuela">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://distrialimentosdelcentro.com/">
<meta property="og:title" content="Distrialimentos del centro -  Consumo Masivo">
<meta property="og:description" content="Distrialimentos del Centro una empresa líder en la distribución y comercialización de productos de consumo masivo para el sector alimenticio en Valencia.">
<meta property="og:image" content="{{asset('images/portada/home_1.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://distrialimentosdelcentro.com/">
<meta property="twitter:title" content="Distrialimentos del centro -  Consumo Masivo">
<meta property="twitter:description" content="Distrialimentos del Centro una empresa líder en la distribución y comercialización de productos de consumo masivo para el sector alimenticio en Valencia.">
<meta property="twitter:image" content="{{asset('images/portada/home_1.jpg')}}">

<link rel="preload" as="image" href="{{asset('images/portada/home_1.jpg')}}">
<link rel="preload" as="image" href="{{asset('images/portada/portada3.jpg')}}">
@endsection

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp


@section('content')
    {{-- header principal --}}
    @include('common.header')
 

      <!-- cover -->
      <section class="p-0 d-none d-sm-block">
        <div class="swiper-container"
          data-top-top="transform: translateY(0px);" 
          data-top-bottom="transform: translateY(250px);">
          <div class="swiper-wrapper">
            <div class="swiper-slide vh-100">
              <div class="image  image-zoom" style="background-image:url({{asset('images/portada/home_1.jpg')}})"></div>
              <div class="caption">
                <div class="container">
                  <div class="row justify-content-between vh-100">
                    <div class="col-lg-8 align-self-center text-white text-shadow" data-swiper-parallax="-100%">
                      <span class="eyebrow text-white mb-1">Food Services</span>
                      <h2 class="display-2"></h2>
                      <h1 class="display-4"><b> Distribución</b> de Productos<br> Consumo Masivo</h1>
                      <a href="/nosotros" class="btn btn-primary btn-rounded px-5">Más información</a>
                    </div>

                    <div class="col-lg-4 align-self-end">
                      <div class="row gutter-1">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                          <div class="equal">
                            <div class="boxed bg-blue text-white">
                              <div class="equal-header">
                                <h4>Valencia, Carabobo</h4>
                              </div>
                              <div class="equal-footer">
                                <span class="text-muted">Almacenes</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 text-white">
                          <div class="equal">
                            <div class="bordered">
                              <div class="equal-header">
                                <h4>+50 Marcas</h4>
                              </div>
                              <div class="equal-footer">
                                <span class="text-muted">Aliados</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 text-white">
                          <div class="equal">
                            <div class="bordered">
                              <div class="equal-header">
                                <h4>+500 Productos</h4>
                              </div>
                              <div class="equal-footer">
                                <span class="text-muted">Catalogo</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="image image-zoom" style="background-image:url({{asset('images/portada/home_5.jpg')}})"></div>
              <div class="caption text-white">
                <div class="container">
                  <div class="row justify-content-center vh-100">
                    <div class="col-lg-6 align-self-center mr-auto" data-swiper-parallax="-100%">
                      <h1>Los mejores <b>PRODUCTOS</b>
                      </h1>
                      <h2>Marcas reconocidas en Venezuela</h2>    
                      <a href="/productos" class="btn btn-rounded btn-primary px-5">Ver Productos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="image image-zoom" style="background-image:url({{asset('images/portada/home_2.png')}})"></div>
              <div class="caption text-white">
                <div class="container">
                  <div class="row justify-content-center vh-100">
                    <div class="col-lg-8 mr-auto  align-self-center "data-swiper-parallax="-100%">
                      <h1 class="display-4 text-dark" ><b class="text-dark">Distrialimentos</b> del centro</h1>
                      <h2 class="text-gray">Trabajamos para tu comodidad y la de tu familia.</h2>    
                      <a href="/contacto" class="btn btn-rounded btn-blue px-5">Contactanos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-pagination"></div>
          
          </div>
        </div>
      </section>
      <!-- / cover -->

      {{-- header - smartphone --}}
 <section class="p-0 d-sm-none">
   
   <div class="swiper-container  swiper-container-half">
     <div class="swiper-wrapper aos-init aos-animate" data-aos-delay="250" data-aos="fade-up">
       <div class="swiper-slide">
         <div class="image image-zoom" style="background-image:url({{asset('images/portada/portada3.jpg')}})"></div>
         <div class="caption text-white">
           <div class="container">
             <div class="row justify-content-center vh-100">
               <div class="col-lg-8 align-self-center text-center"  data-swiper-parallax="-100%">
                 <h1 class="display-3"><b>Distribuidores</b></h1> 
                 <h2>Productos de consumo masivo</h2>
                 <a href="/nosotros" class="btn btn-rounded btn-primary px-5">Mas información</a>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="swiper-slide">
         <div class="image image-zoom" style="background-image:url({{asset('images/portada/home_2.png')}})"></div>
         <div class="caption text-white">
           <div class="container">
             <div class="row justify-content-center vh-100">
               <div class="col-lg-8 align-self-center text-center" data-swiper-parallax="-100%">
                 <h1 class="text-dark">Los mejores <b class="text-dark">PRODUCTOS</b></h1>
                 <h2 class="text-gray">Marcas reconocidas <br>Venezuela</h2>    
                 <a href="/productos" class="btn btn-rounded btn-blue px-5">Ver Productos</a>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="swiper-slide">
         <div class="image image-zoom" style="background-image:url({{asset('images/portada/home_3.jpg')}})"></div>
         <div class="caption text-white">
           <div class="container">
             <div class="row justify-content-center vh-100">
               <div class="col-lg-8 align-self-center text-center"data-swiper-parallax="-100%">
                 <h1><b>Distrialimentos</b>  del centro</h1>
                 <h2 class="text-light">Trabajamos para tu comodidad y la de tu familia.</h2>    
                 <a href="/contacto" class="btn btn-rounded btn-primary px-5">Contactanos</a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="swiper-pagination"></div>
   </div>
 </section>
    
    <!-- cover -->
    {{-- <section class="p-0">
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
      </section> --}}
      <!-- / cover -->

      
    <!-- presentation -->
    <section class="section-lg">
        <div class="container">
          <div class="row text-center text-lg-left">
            <div class="col-12 col-lg-12">
              <div class="row">
                <div class="col-lg-9">
                  <h1 class="h2">Distrialimentos del centro</h1>
                  <p class="lead">Somos una empresa con más de 6 años distribuyendo productos de consumo masivo para la zona Centro – Occidente del Venezuela.</p>
                </div>
              </div>
              <div class="row gutter-0">
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="bordered rising p-3">
                    <i class="icon-product-hunt text-primary fs-40 mb-3"></i>
                    <h4 class="mb-0">Productos</h4>
                    <p>Los mejores productos con marcas reconocidas en toda Venezuela.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                  <div class="bordered rising p-3">
                    <i class="icon-users2 text-primary fs-40 mb-3"></i>
                    <h4 class="mb-0">Vendedores</h4>
                    <p>Atención personalizada con nuestro equipo de venta en tu establecimiento.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                  <div class="bordered rising p-3">
                    <i class="icon-cart-plus text-primary fs-40 mb-3"></i>
                    <h4 class="mb-0">Compras Online</h4>
                    <p>Podras tomar tus pedidos de forma online con nuestra plataforma de compra.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300">
                  <div class="bordered rising p-3">
                    <i class="icon-truck2 text-primary fs-40 mb-3"></i>
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
              <figure class="photo equal">
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
                @for ($i = 7 ; $i < 15; $i++)
                  <figure class="photo equal">
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
                <button type="button" class="btn btn-rounded btn-with-ico btn-blue">Ver nuestros productos <i class="icon-chevron-right2 fs-24"></i></button>
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
              <img src="{{asset('images/cta/compras.jpg')}}" alt="compra online">
            </div>
            <div class="col-md-4 text-center text-md-left">
              <span class="eyebrow mb-1 text-primary">Comprar Online</span>
              <h3>Tus pedidos a un click de distancia.</h3>
              <a href="https://distrialimentos.morelynx.com/home.aspx" class="btn btn-primary btn-rounded">Iniciar un pedido</a>
            </div>
          </div>
        </div>
      </section>
      <!-- / video -->

       <!-- video -->
    {{-- <section class="separator-top">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-7">
            <img src="{{asset('images/cta/compras.jpg')}}" alt="">
          </div>
          <div class="col-md-4 text-center text-md-left">
            <span class="eyebrow mb-1 text-primary">Atencion al cliente</span>
            <h2>Solicita un vendedor a tu negocio.</h2>
            <a href="https://api.whatsapp.com/send?phone=584244010776&text=Hola,%20quiero%20la%20atenci%C3%B3n%20de%20uno%20de%20sus%20vendedores%20a%20mi%20establecimiento.%20Gracias" class="btn btn-primary btn-rounded">Solicitar atención</a>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- / video -->

        <!-- cta -->
    <section>
        <div class="image image-scrolling" style="background-image:url({{asset('images/cta/atencion.jpg')}})"
        data--100-bottom-top="transform: translateY(0%);" 
        data-top-bottom="transform: translateY(25%);"></div>
        <div class="container">
          <div class="row justify-content-left align-items-center">
            <div class="col-md-8 col-lg-6 text-center text-white text-shadow">
              <span class="eyebrow mb-1">Atención al cliente</span>
              <h2 class="display-4"><b>Nuestro equipo</b> via Whatsapp</h2>
              <a href="https://api.whatsapp.com/send?phone=584244010776&text=Gracias+por+comunicarte+con+Distrialimentos+Del+Centro+%C2%BFEn+que+podemos+servirte%3Fs" class="btn btn-blue btn-rounded px-4">Iniciar conversación</a>
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
                      <p>Estamos ubicados en Valencia, Estado Carabobo.  Zona Industrial Sur, Centro Empresarial Arturo Michelena Local D8. <a target="_black" href="https://www.google.com/maps/place/Centro+Empresarial+Arturo+Michelena/@10.1572271,-67.9439393,17z/data=!4m5!3m4!1s0x8e80687b7be5b9c9:0xd9533b642fdbcd8a!8m2!3d10.1587618!4d-67.9423248">Ubicación en Google Map</a></p>
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
        <div class="tab-pane show active separator-bottom" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
          <div class="component-example">
            <div class="container">
              <div class="row">
                <div class="col partners align-items-center">
                  <div class="owl-carousel" data-items="[6,4,2]" data-loop="true" data-autoplay="true">
                    @for ($i = 1; $i < 25; $i++)
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

    <section class="pb-2 bg-blue text-white">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-md-10 text-center">
            <h1>Solicita nuestro <b>Catálogo de productos</b></h1>
            <a  class="btn btn-lg btn-primary btn-rounded mt-2 py-2 px-7" href="{{ asset('pdf/catalogo_distrialimentos_del_centro.pdf') }}">Solicitar catalogo</a>
          </div>
         
        </div>
      </div>
    </section>
  

@endsection