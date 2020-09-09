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
              <div class="image image-overlay" style="background-image:url({{asset('images/demo/coworking/coworking-1.jpg')}})"></div>
              <div class="caption">
                <div class="container">
                  <div class="row justify-content-center vh-100">
                    <div class="col-md-8 align-self-center text-center">
                      <h1 data-swiper-parallax="-100%" class="display-3"><b>Distribuidores</b> de productos de consumo masivo.</h1>
                      <a href="/servicios" class="btn btn-rounded btn-white px-5">Conoce nuestros servicios</a>
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
            <div class="col-12 col-lg-3 presentation presentation-responsive">
              {{-- <img class="left-25 vertical-align" src="images/demo/stock/plant.png" alt="Image"> --}}
            </div>
          </div>
        </div>
      </section>
      <!-- / presentation -->

      
    <!-- gallery -->
    <section class="bg-light">
        <div class="container gallery">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <h2><b>Modern interiors</b> for a better experience.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="row mb-1" data-aos="fade-left">
            <div class="col-10">
              <div class="owl-carousel visible align-bottom" data-items="[2,2,2]" data-margin="10" data-loop="true" data-autoplay="true">
                <figure class="photo equal equal-short">
                  <a href="{{asset('images/demo/coworking/coworking-small-1.jpg')}}" 
                    style="background-image: url({{asset('images/demo/coworking/coworking-small-1.jpg')}});">
                  </a>
                </figure>
                <figure class="photo equal">
                  <a href="{{asset('images/demo/coworking/coworking-small-2.jpg')}}" 
                    style="background-image: url({{asset('images/demo/coworking/coworking-small-2.jpg')}});">
                  </a>
                </figure>
                <figure class="photo equal equal-short">
                  <a href="{{asset('images/demo/coworking/coworking-small-3.jpg')}}" 
                    style="background-image: url({{asset('images/demo/coworking/coworking-small-3.jpg')}});">
                  </a>
                </figure>
                <figure class="photo equal">
                  <a href="images/demo/coworking/coworking-small-4.jpg" 
                    style="background-image: url({{asset('images/demo/coworking/coworking-small-4.jpg')}});">
                  </a>
                </figure>
                <figure class="photo equal equal-short">
                  <a href="images/demo/coworking/coworking-small-5.jpg" 
                    style="background-image: url({{asset('images/demo/coworking/coworking-small-5.jpg')}});">
                  </a>
                </figure>
                <figure class="photo equal">
                  <a href="images/demo/coworking/coworking-small-1.jpg" 
                    style="background-image: url({{asset('images/demo/coworking/coworking-small-3.jpg')}});">
                  </a>
                </figure>
              </div>
            </div>
          </div>
          <div class="row justify-content-end" data-aos="fade-right">
            <div class="col-10">
              <div class="owl-carousel visible" data-items="[2,2,2]" data-margin="10" data-loop="true" data-autoplay="true" data-rtl="true">
                <figure class="photo equal equal-short">
                  <a href="images/demo/coworking/coworking-small-6.jpg" 
                    style="background-image: url({{asset('')}}images/demo/coworking/coworking-small-6.jpg);">
                  </a>
                </figure>
                <figure class="photo equal">
                  <a href="images/demo/coworking/coworking-small-7.jpg" 
                    style="background-image: url({{asset('')}}images/demo/coworking/coworking-small-7.jpg);">
                  </a>
                </figure>
                <figure class="photo equal equal-short">
                  <a href="images/demo/coworking/coworking-small-8.jpg" 
                    style="background-image: url({{asset('')}}images/demo/coworking/coworking-small-8.jpg);">
                  </a>
                </figure>
                <figure class="photo equal">
                  <a href="images/demo/coworking/coworking-small-9.jpg" 
                    style="background-image: url({{asset('')}}images/demo/coworking/coworking-small-9.jpg);">
                  </a>
                </figure>
                <figure class="photo equal equal-short">
                  <a href="images/demo/coworking/coworking-small-10.jpg" 
                    style="background-image: url({{asset('')}}images/demo/coworking/coworking-small-10.jpg);">
                  </a>
                </figure>
                <figure class="photo equal">
                  <a href="images/demo/coworking/coworking-small-2.jpg" 
                    style="background-image: url({{asset('')}}images/demo/coworking/coworking-small-2.jpg);">
                  </a>
                </figure>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
            <a href="/productos">
                <button type="button" class="btn btn-rounded btn-with-ico btn-green">Ver Productos <i class="icon-chevron-right2 fs-24"></i></button>
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
              <video
                poster="images/demo/coworking/coworking-3.jpg"
                id="video"
                class="youtube video-js vjs-default-skin video-16-9"
                controls
                width="640" height="264"
                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=DkeiKbqa02g"}], "youtube": { "ytControls": 2 } }'
              >
              </video>
            </div>
            <div class="col-md-4 text-center text-md-left">
              <span class="eyebrow mb-1 text-green">Video</span>
              <h2>Our Most Requested Tour</h2>
              <a href="" class="btn btn-green btn-rounded">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>
      <!-- / video -->

        <!-- cta -->
    <section>
        <div class="image image-overlay image-scrolling" style="background-image:url(images/demo/coworking/coworking-2.jpg)"
        data--100-bottom-top="transform: translateY(0%);" 
        data-top-bottom="transform: translateY(25%);"></div>
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-6 text-center text-white text-shadow">
              <span class="eyebrow mb-1">More Questions ?</span>
              <h2 class="display-4">Ask our <b>live support</b> via chat or phone</h2>
              <a href="" class="btn btn-white btn-rounded px-4">Get in Touch</a>
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
                <div class="accordion open" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>How do your Membership Agreements work?</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>Do I have to sign a lease agreement?</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>What are your standard working hours?</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="accordion-group accordion-group-highlight" data-accordion-group>
                <div class="accordion open" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>What about phone service in my private office?</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>Can guests visit me at my private office?</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                  <div class="accordion-control" data-control>
                    <h5>What is the minimal lease period?</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / faq -->



@endsection