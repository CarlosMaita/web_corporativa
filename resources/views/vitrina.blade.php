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
    <div>
      <div class="row">
        <div class="col-sm-3">
          <div class="container">
            <div class="row">
              <div class="col d-none d-sm-block" style="cursor: pointer;">
                <ul class="nav flex-column nav-tabs nav-vertical ">
                  <li class="nav-item">
                    <a class="nav-link active" data-filter="All">Todos</a>
                  </li>
                  @foreach($categories as $category)
                  <li class="nav-item ">
                    <a class="nav-item nav-link " data-filter="{{$category->id}}">{{$category->title}}</a>
                  </li>
                  @endforeach
                </ul> 
              </div>

              {{-- smartphone    --}}
              <div class="col d-sm-none p-1">
                <div class="dropdown">
                  <button class="btn  btn-with-ico  btn-lg btn-block btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-list"></i> Nuestras Lineas
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-filter="All">Todos</a>
                    <div class="dropdown-divider"></div>
                    @foreach($categories as $category)
                      <a class="dropdown-item" data-filter="{{$category->id}}" >
                        <span>{{$category->title}}</span>
                        <p>Descripcion base de datos</p>
                      </a>
                      <div class="dropdown-divider"></div>
                    @endforeach
                  </div>
                </div>
             </div>
              
            </div>
          </div>
        </div>

        <div class="col-sm-9">
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
        </div>

      </div>
    </div> 
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

                        <svg width="44"  id="Layer_1" height="51" viewBox="-1 -1 45 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path stroke="#000000" stroke-width="2" stroke-miterlimit="10"  d="M7.8848 7.54008H14.1682C14.1682 5.54032 14.9626 3.62248 16.3766 2.20844C17.7907 0.794399 19.7085 0 21.7083 0C23.708 0 25.6259 0.794399 27.0399 2.20844C28.4539 3.62248 29.2483 5.54032 29.2483 7.54008H35.5317C37.5315 7.54008 39.4493 8.33447 40.8634 9.74851C42.2774 11.1626 43.0718 13.0804 43.0718 15.0802V42.7271C43.0718 44.7268 42.2774 46.6447 40.8634 48.0587C39.4493 49.4728 37.5315 50.2672 35.5317 50.2672H7.8848C5.88505 50.2672 3.9672 49.4728 2.55316 48.0587C1.13913 46.6447 0.344727 44.7268 0.344727 42.7271V15.0802C0.344727 13.0804 1.13913 11.1626 2.55316 9.74851C3.9672 8.33447 5.88505 7.54008 7.8848 7.54008ZM12.9115 15.0802H30.505V10.0534H12.9115V15.0802ZM21.7083 2.51336C20.3751 2.51336 19.0965 3.04296 18.1538 3.98565C17.2112 4.92834 16.6816 6.20691 16.6816 7.54008H26.735C26.735 6.20691 26.2054 4.92834 25.2627 3.98565C24.32 3.04296 23.0414 2.51336 21.7083 2.51336ZM35.9087 24.1282L17.9382 42.0988L9.89549 34.056L11.6724 32.2791L17.9382 38.5449L34.1293 22.3513L35.9062 24.1282H35.9087Z" fill="none"/>
                        </svg>

                      </i>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-1">Catalogo & Disponibilidad</h3>
                      <p>Pregunta por nuestro catálogo de productos y disponibilidad.</p>
                    </div>
                    <div class="col-md-4 text-lg-right">
                      <a href="https://api.whatsapp.com/send?phone=584244010776&text=Hola,%20Estoy%20interesado%20en%20saber%20la%20disponibilidad%20de%20sus%20productos.%20Gracias." class="btn btn-primary btn-rounded px-5">Preguntar <span class="d-none d-md-block">por Disponibilidad</span></a>
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