@extends('common.main')

@section('title')
    <title>Nosotros</title>
@endsection

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp

@section('content')
    {{-- header principal --}}
    @include('common.header')
 
{{-- cover --}}
<section class="p-0">
    <div class="swiper-container text-white swiper-container-fade swiper-container-horizontal skrollable skrollable-between" data-top-top="transform: translateY(0px);" data-top-bottom="transform: translateY(250px);" style="transform: translateY(0px);">
      <div class="swiper-wrapper" style="transition-duration: 0ms;">
        <div class="swiper-slide vh-100 swiper-slide-prev" style="width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
          <div class="image image-overlay" style="background-image:url(../images/demo/fitness/fitness-1.jpg)"></div>
          <div class="caption">
            <div class="container">
              <div class="row justify-content-between vh-100">
                <div class="col-md-8 align-self-center" data-swiper-parallax-y="-250%" style="transform: translate3d(0px, -250%, 0px); transition-duration: 0ms;">
                  <h1 class="display-2 font-weight-bold text-uppercase">Good start of your weekend</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide vh-100 swiper-slide-active" style="width: 1349px; opacity: 1; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;">
          <div class="image image-overlay" style="background-image:url(../images/demo/fitness/fitness-2.jpg)"></div>
          <div class="caption">
            <div class="container">
              <div class="row vh-100">
                <div class="col-lg-6 align-self-center" data-swiper-parallax-y="-250%" style="transform: translate3d(0px, 0%, 0px); transition-duration: 0ms;">
                  <h1 class="display-3"><b>Awesome</b> solutions for your business.</h1>
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

      <div class="swiper-pagination swiper-pagination-vertical swiper-pagination-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
  </section>
  {{-- cover --}}


  <section class="section-lg">
    <div class="container">
      <div class="row text-center text-lg-left">
        <div class="col-12 col-lg-8">
          <div class="row">
            <div class="col-lg-7">
              <h2 class="text-uppercase font-weight-bold">Our Philosophy</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="row gutter-3">
            <div class="col-sm-6 col-lg-4 aos-init aos-animate" data-aos="fade-up">
              <i class="svg-icon fs-50 text-blue">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 367 367" style="enable-background:new 0 0 367 367;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M357.7,119.7c12.4-12.4,12.4-32.4,0-44.8l-7.2-7.2c10-14.4,8.4-34-4-46.8c-6.8-6.8-16-10.8-26-10.8
                      c-7.6,0-14.8,2.4-20.8,6.4l-7.2-7.2c-6-6-14-9.2-22.4-9.2c-8.4,0-16.4,3.2-22.4,9.2c-5.6,5.6-8.4,12.8-9.2,20
                      c-5.6-2.8-11.6-4.4-18-4.4c-10.8,0-20.4,4-28,11.6c-7.6,7.6-11.6,17.6-11.6,28c0,10.8,4,20.4,11.6,28l22,22l-99.6,99.2l-22-22
                      c-7.6-7.6-17.6-11.6-28-11.6c-10.8,0-20.4,4-28,11.6c-12.4,12.4-14.8,31.2-7.2,46c-7.6,0.4-14.8,3.6-20.4,9.2
                      c-12.4,12.4-12.4,32.8,0,45.2l7.6,7.2c-4.4,6-6.4,13.2-6.4,20.8c0,9.6,4,18.8,10.8,26c7.2,7.2,16.4,10.8,26,10.8
                      c7.2,0,14.4-2.4,20.8-6.4l7.2,7.2c6,6,14,9.2,22.4,9.2c8.4,0,16.4-3.2,22.4-9.2c5.6-5.6,8.4-12.8,9.2-20c5.6,2.8,11.6,4.4,18,4.4
                      c10.4,0,20.4-4,28-11.6c15.6-15.6,15.6-40.8,0-56l-22-22l99.2-99.2l22,22c7.6,7.6,17.6,11.6,28,11.6c10.8,0,20.4-4,28-11.6
                      c13.2-13.2,14.8-33.2,6-48.4c0.8,0,1.6,0,2.4,0C346.9,126.9,353.3,124.5,357.7,119.7z M336.9,30.1c7.6,7.6,8.8,18.8,4,28
                      l-31.6-31.6C318.1,21.3,329.7,22.5,336.9,30.1z M30.5,336.5c-7.6-7.6-8.8-18.8-4-28l31.6,31.6C49.3,345.3,37.7,344.1,30.5,336.5z
                       M110.5,348.1c-7.2,7.2-19.2,7.2-26.4,0l-65.2-65.2c-7.2-7.6-7.2-19.2,0-26.4c3.6-3.6,8.4-5.6,13.2-5.6c4.8,0,9.6,2,13.2,5.6
                      l65.2,65.2C117.7,328.9,117.7,340.9,110.5,348.1z M165.7,283.3c10.4,10.4,10.4,27.2,0,37.6c-5.2,5.2-11.6,7.6-18.8,7.6
                      s-13.6-2.8-18.8-7.6l-82-82c-10-10.4-10-27.6,0-37.6c5.2-5.2,11.6-7.6,18.8-7.6s13.6,2.8,18.8,7.6l55.6,55.6L165.7,283.3z
                       M144.1,242.5l-19.6-19.6l98.8-98.8l19.6,19.6L144.1,242.5z M320.5,164.9c-5.2,5.2-11.6,7.6-18.8,7.6s-13.6-2.8-18.8-7.6
                      l-54.8-54.8l-26.4-26.8c-5.2-4.8-8-11.6-8-18.8c0-7.2,2.8-13.6,7.6-18.8c5.2-5.2,11.6-7.6,18.8-7.6s13.6,2.8,18.8,7.6l58,58
                      l9.6,9.6l14,14C330.9,137.7,330.9,154.5,320.5,164.9z M316.5,104.5l-8.8-8.4l-50.8-51.2c-7.6-7.2-7.6-19.2,0-26.4
                      c3.6-3.6,8.4-5.6,13.2-5.6c5.2,0,9.6,2,13.2,5.6l11.6,11.6l42.4,42.4l11.6,11.6c7.2,7.2,7.2,19.2,0,26.4c-2.8,2.8-6.8,3.2-9.6,3.2
                      C331.3,113.7,322.1,110.1,316.5,104.5z" style="stroke-dasharray: 3335, 3337; stroke-dashoffset: 0;"></path>
                  </g>
                </g>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-primary my-1">Professional Gym</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-sm-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
              <i class="svg-icon fs-50 text-primary">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 391.2 391.2" style="enable-background:new 0 0 391.2 391.2;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M198.7,232.8L143.9,178c-2.4-2.4-6.8-2.4-9.2,0c-2.4,2.4-2.4,6.8,0,9.2l50,50l-48.8,49.2c-2.4,2.4-2.4,6.8,0,9.2
                      c1.2,1.2,2.8,2,4.8,2c1.6,0,3.2-0.8,4.8-2l53.2-53.6C201.1,239.6,201.1,235.2,198.7,232.8z" style="stroke-dasharray: 345, 347; stroke-dashoffset: 0;"></path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M339.1,128c1.2,1.2,2.8,2,4.8,2c1.6,0,3.2-0.8,4.8-2c2.4-2.4,2.4-6.8,0-9.2l-36.4-36.4c-2.4-2.4-6.8-2.4-9.2,0
                      c-2.4,2.4-2.4,6.8,0,9.2l14,14l-19.2,19.2c-20-18.4-44.8-31.6-72.4-37.2V58.4h6c16,0,29.2-13.2,29.2-29.2S247.5,0,231.5,0h-72.8
                      c-16,0-29.2,13.2-29.2,29.2s13.2,29.2,29.2,29.2h4.4v28.8c-29.6,6-56.4,20.8-76.8,41.6c0,0-0.4,0-0.4,0.4c0,0,0,0.4-0.4,0.4
                      c-27.6,27.6-44.8,66-44.8,108s17.2,80.4,44.8,108c0,0,0,0.4,0.4,0.4c0,0,0.4,0,0.4,0.4c27.6,27.6,66,44.8,108,44.8
                      s80.4-17.2,108-44.8c0,0,0.4,0,0.4-0.4c0,0,0-0.4,0.4-0.4c27.6-27.6,44.8-66,44.8-108c0-40-15.2-76.4-40.4-103.6l19.2-19.2
                      L339.1,128z M158.7,44.8c-9.2,0.4-16.4-6.8-16.4-16c0-8.8,7.2-16,16-16h72.4c8.8,0,16,7.2,16,16c0,8.8-7.2,16-16,16h-12.4h-48.8
                      H158.7z M211.9,58.4v26.8c-6-0.8-12-1.2-18-1.2s-12,0.4-18,1.2V58.4H211.9z M333.9,230.8h-38c-3.6,0-6.4,2.8-6.4,6.4
                      c0,3.6,2.8,6.4,6.4,6.4h38c-1.6,33.6-15.2,64.4-36.4,87.6l-26.8-26.8c-2.4-2.4-6.8-2.4-9.2,0c-2.4,2.4-2.4,6.8,0,9.2l26.8,26.8
                      c-23.6,21.2-54,34.8-87.6,36.4v-38c0-3.6-2.8-6.4-6.4-6.4c-3.6,0-6.4,2.8-6.4,6.4v38c-33.6-1.6-64.4-15.2-87.6-36.4l26.8-26.8
                      c2.4-2.4,2.4-6.8,0-9.2c-2.4-2.4-6.8-2.4-9.2,0l-26.8,26.8c-21.2-23.6-34.8-54-36.4-87.6h38c3.6,0,6.4-2.8,6.4-6.4
                      c0-3.6-2.8-6.4-6.4-6.4h-38c1.6-33.6,15.2-64.4,36.4-87.6l26.8,26.8c1.2,1.2,2.8,2,4.8,2c1.6,0,3.2-0.8,4.8-2
                      c2.4-2.4,2.4-6.8,0-9.2L100.7,134c23.6-21.2,54-34.8,87.6-36.4v38c0,3.6,2.8,6.4,6.4,6.4c3.6,0,6.4-2.8,6.4-6.4v-38
                      c33.6,1.6,64.4,15.2,87.6,36.4l-26.8,26.8c-2.4,2.4-2.4,6.8,0,9.2c1.2,1.2,2.8,2,4.8,2c1.6,0,3.2-0.8,4.8-2l26.8-26.8
                      C318.7,166.8,332.3,197.2,333.9,230.8z" style="stroke-dasharray: 3313, 3315; stroke-dashoffset: 0;"></path>
                  </g>
                </g>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-primary my-1">Best Results</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-sm-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <i class="svg-icon fs-50 text-primary">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 418.4 418.4" style="enable-background:new 0 0 418.4 418.4;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M261.8,60.4c6.8-4.8,11.2-12.8,11.2-21.6V26.4C273,12,261,0,246.6,0h-74.4c-14.4,0-26.4,12-26.4,26.4v12.4
                      c0,9.2,4.8,17.2,12,22c-28.4,22-44,78.4-46,86c0,0.4-0.4,1.2-0.4,1.6V362c0,31.2,25.2,56.4,56.4,56.4h82.8
                      c31.2,0,56.4-25.2,56.4-56.4V148.4c0-0.4,0-0.8,0-1.2C306.2,144,293,82.8,261.8,60.4z M244.6,13.2h2c7.6,0,13.2,6,13.2,13.2v12.4
                      c0,7.2-6,13.2-13.2,13.2h-2V13.2z M215.8,13.2h15.6V52h-15.6V13.2z M187.4,13.2H203V52h-15.6V13.2z M159,26.4
                      c0-7.2,6-13.2,13.2-13.2h2v39.2h-2c-7.2,0-13.2-6-13.2-13.2V26.4z M293.8,191.6h-56c-3.6,0-6.4,2.8-6.4,6.4s2.8,6.4,6.4,6.4h56
                      v34.8h-56c-3.6,0-6.4,2.8-6.4,6.4c0,3.6,2.8,6.4,6.4,6.4h56v34.8h-56c-3.6,0-6.4,2.8-6.4,6.4c0,3.6,2.8,6.4,6.4,6.4h56v61.2
                      c0,23.6-19.2,43.2-43.2,43.2h-82.4c-23.6,0-43.2-19.2-43.2-43.2v-60h56c3.6,0,6.4-2.8,6.4-6.4c0-3.6-2.8-6.4-6.4-6.4h-56v-34.8h56
                      c3.6,0,6.4-2.8,6.4-6.4c0-3.6-2.8-6.4-6.4-6.4h-56v-34.8h56c3.6,0,6.4-2.8,6.4-6.4c0-3.6-2.8-6.4-6.4-6.4h-56v-43.2
                      c6.4-24,28.4-84,56-84h57.2c30.8-0.4,50.4,59.6,55.6,83.6V191.6z" style="stroke-dasharray: 3161, 3163; stroke-dashoffset: 0;"></path>
                  </g>
                </g>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-primary my-1">Healthy Diet</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 presentation presentation-responsive aos-init aos-animate" data-aos="zoom-in-left">
          <img class="left-50 vertical-align" src="../images/demo/stock/trainers.jpg" alt="Image">
        </div>
      </div>
    </div>
  </section>

    <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4">
              <h2>Learn design with our new course.</h2>
            </div>
            <div class="col-lg-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
     
    <div class="tab-pane show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
        <div class="component-example">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="nav nav-pills mb-2">
                  <a class="nav-item nav-link active" data-toggle="tab" href="#demo-1-1">First Tab</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-2">Second Tab</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-3">Third Tab</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-4">Third Tab</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-5">Third Tab</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#demo-1-6">Third Tab</a>
                </div>
                <div class="tab-content" id="demo-1">
                  <div class="tab-pane show active" id="demo-1-1" role="tabpanel" aria-labelledby="demo-1-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error maxime minima commodi vel excepturi repudiandae numquam beatae dignissimos quod accusamus ab perferendis, quibusdam, officiis aspernatur aut vero assumenda voluptatum pariatur.</p>
                  </div>
                  <div class="tab-pane" id="demo-1-2" role="tabpanel" aria-labelledby="demo-1-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat unde veniam qui dicta exercitationem deserunt vel suscipit quas sequi at inventore perferendis aperiam nisi itaque necessitatibus, saepe molestiae iste, accusamus.</p>
                  </div>
                  <div class="tab-pane" id="demo-1-3" role="tabpanel" aria-labelledby="demo-1-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor voluptas voluptate, asperiores maiores perspiciatis itaque aliquam ut blanditiis qui!</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="owl-carousel owl-carousel-single" data-items="[3]" data-dots="true" data-nav="false" data-autoplay="true" data-loop="true">
                    <figure class="photo">
                      <img src="images/demo/image-square-1.jpg" alt="Image">
                    </figure>
                    <figure class="photo">
                      <img src="images/demo/image-square-2.jpg" alt="Image">
                    </figure>
                    <figure class="photo">
                      <img src="images/demo/image-square-3.jpg" alt="Image">
                    </figure>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
    
<section class="pb-0 bg-dark text-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <h1>Start building <b>beautiful &amp; functional</b> landing pages in minutes.</h1>
          <a href="/whatsapp" class="btn btn-lg btn-purple btn-rounded mt-2 py-2 px-7">Purchase - $49</a>
        </div>
       
      </div>
    </div>
  </section>

@endsection