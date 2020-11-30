@extends('common.main')

@section('title')
  <title>Productos de consumo masivo - Venezuela</title>
  <meta name="title" content="Productos de consumo masivo - Venezuela">
  <meta name="description" content="Distribuimos productos al mayor de consumo masivo para cadenas de supermercados, bodegones, restaurantes, panaderías, carnicerías y mini-mercado en Venezuela.">
  <meta name="keywords" content="productos al mayor de consumo masivo, productos al mayor de consumo masivo para cadenas de supermercados, distribucion de productos en venezuela">   
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
            <div class="col-md-4 text-center text-md-center d-sm-block d-none">
              <span class="eyebrow mb-1 text-primary">Comprar Online</span>
              <h3>Registrate en nuestra plataforma</h3>
              <a href="https://distrialimentos.morelynx.com/home.aspx?option=reg" class="btn btn-primary btn-rounded">Registrarse</a>
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
              <div class="col-12 d-none d-sm-block" style="cursor: pointer;">
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
              <div class="col-12 d-sm-none p-1">
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
                        {{-- <p>Descripcion base de datos</p> --}}
                      </a>
                      <div class="dropdown-divider"></div>
                    @endforeach
                  </div>
                </div>
             </div>
             <div class="col-12 d-sm-none p-1 text-center">
              <span class="eyebrow mb-1 text-primary">Comprar Online</span>
              <h3>Registrate en nuestra plataforma</h3>
              <a href="https://distrialimentos.morelynx.com/home.aspx?option=reg" class="btn btn-primary btn-rounded">Registrarse</a>
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
                  <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="All, {{$product->category->id}}" data-sort="value" style="list-style: none;">
                    <figure class="photo equal">
                      <a href="{{asset('images/productos/processed/'.$product->image)}}" 
                        style="background-image: url('{{asset('images/productos/processed/'.$product->image)}}');">
                        <figcaption class="photo-caption">
                          <span class="text-white h3"><strong>{{ ucfirst(mb_strtolower($product->title,'UTF-8'))}}</strong></span>
                          <p class="text-light">{{ ucfirst(mb_strtolower($product->description, 'UTF-8'))}}</p>
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
      
      <section class="p-5 mt-5 bg-blue text-white">
        <div class="container">
          <div class="row justify-content-center">
            
            <div class="col-md-10 text-center">
              <h1>Pregunta por nuestro <br><b>Catalogo & Disponibilidad</b></h1>
              <a href="{{ asset('pdf/catalogo_distrialimentos_del_centro.pdf') }}" class="btn btn-lg btn-primary btn-rounded mt-2 py-2 px-7">Preguntar</a>
            </div>
            
          </div>
        </div>
      </section>
      {{-- / cta --}}
  
@endsection