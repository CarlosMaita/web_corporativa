@extends('common.main')

@section('title')
    <title>Productos</title>
@endsection


@section('content')
    {{-- header principal --}}
    @include('common.header')
 
     <!-- cover -->
     <section class="hero hero-with-header">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1 data-swiper-parallax="-100%" class="display-3"><b>Nuestros productos</b><br>Lo que tenemos para tí.</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- / cover -->

      

    <!-- works -->
    <section>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="nav nav-tabs">
                <a class="nav-item nav-link active" data-filter="All">All</a>
                @foreach($categories as $category)
                <a class="nav-item nav-link " data-filter="{{$category->id}}">{{$category->title}}</a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="container-full">
          <div class="row">
            <div class="col">
              <ul class="row gutter-0 gallery filtr-container ">
                @foreach($products as $product)
                <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="All, {{$product->category->id}}" data-sort="value">
                  <figure class="photo equal">
                    <a href="{{asset('images/'.$product->image)}}" 
                      style="background-image: url({{asset('images/'.$product->image)}});">
                      <figcaption class="photo-caption">
                        <span>{{$product->title}}</span>
                        <p>{{$product->description}}</p>
                      </figcaption>
                    </a>
                  </figure>
                </li>
                @endforeach
                
              </ul>
            </div>
          </div>
        </div>
      </section> 
      <!-- / works -->
  

      {{-- CTA --}}
      <!-- bordered -->
      <section id="default" class="component">
          <div class="tab-pane show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
            <div class="component-example">
              <div class="container">
                <div class="bordered p-4">
                  <div class="row justify-content-between align-items-center text-center text-md-left">
                    <div class="col-md-2">
                      <i class="svg-icon fs-60 text-blue">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11,48C5.477,48,1,43.523,1,38s4.477-10,10-10h2v20
                          H11z"/>
                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M53,28c5.523,0,10,4.477,10,10s-4.477,10-10,10h-2
                          V28H53z"/>
                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M13,31v-9c0,0,0-16,19-16s19,16,19,16v6"/>
                        <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="51,48 51,53 36,59 28,59 28,55 36,55 
                          36,58 "/>
                        </svg>
                      </i>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-1">Get in touch with us.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-4 text-lg-right">
                      <a href="" class="btn btn-primary btn-rounded px-5">Write Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
         
      </section>
      <!-- / bordered -->
      {{-- / cta --}}

@endsection