@extends('common.main')

@section('title')
	<title>Contacto - Distrialimentos del centro</title>
	<meta name="title" content="Contacto - Distrialimentos del centro">
	<meta name="description" content="¿Buscas un distribuidor de alimentos al mayor en Venezuela? En Distrialimentos del centro contamos con vendedores 24/7, comunícate con nosotros ¡Te atenderemos!">
	<meta name="keywords" content="distribuidor de alimentos al mayor en Venezuela, Distrialimentos del centro, alimentos al mayor  venezuela, consumo masivo en venezuela">
@endsection




@section('content')
    {{-- header principal --}}
	@include('common.header')
	
<!-- cover -->
<section class="pb-2">
	<div class="container">
	  <div class="row justify-content-center">
		<div class="col-md-10 text-center p-sm-10 p-5">
		  <h1 data-swiper-parallax="-100%" class="display-3">Solicita nuestro <b>Catálogo de productos</b></h1>
		  <a href="{{ asset('pdf/catalogo_distrialimentos_del_centro.pdf') }}" class="btn btn-blue btn-rounded px-5">Pedir catalogo</a>
		</div>
	  </div>
	</div>
  </section>
  <!-- / cover -->


 	<section class="bg-light">
 	  <div class="container">
 	    <div class="row">
 	      <div class="col-md-6">
 	        <span class="eyebrow mb-1 text-primary">Envianos un Mail</span>
 	        <h2>Te responderemos lo mas pronto posible.</h2>
 	      </div>
		 </div>
		 @if ( session('exito'))
		 {{-- alert exitosos --}}
		 	<div class="alert alert-success" role="alert">
				{{session('exito')}}
			</div>

		@else
		<div class="row">
		  <div class="col">
			<form action="{{route('mail')}}" method="post" >
			   @csrf
			   @method('post')
			  <div class="form-row mb-1">
				  <span class="text-red">*</span>
				  <div class="col">
					  <input type="text" class="form-control form-control-minimal" placeholder="Nombre" name="nombre" value="{{session('nombre') ?? ''}}" required>
				   </div>
				<span class="text-red">*</span>
				<div class="col">
					<input type="email" class="form-control form-control-minimal" placeholder="Correo" name="correo" value="{{session('correo') ?? ''}}" required>
				</div>
				<div class="col">
				  <input type="text" class="form-control form-control-minimal" placeholder="Telefono" name="telefono" value="{{session('telefono') ?? ''}}">
			   </div>
			  </div>
			  <div class="form-row mb-1">
				  <div class="col">
				  <textarea class="form-control form-control-minimal" id="exampleFormControlTextarea1" rows="3" placeholder="Tu Mensaje" name="mensaje">{{session('mensaje') ?? ''}}</textarea>
			   </div>
		   </div>
		   <div class="form-row mt-3">
				<div class="col">
				  <button class="btn btn-primary px-5">Enviar correo</button>
				</div>
			  </div>
			</form>
		  </div>
		</div>
		@endif


 	  </div>
 	</section>
@endsection