@extends('common.main')

@section('title')
    <title>Contacto</title>
@endsection




@section('content')
    {{-- header principal --}}
    @include('common.header')
 	<section class="bg-light">
 	  <div class="container">
 	    <div class="row">
 	      <div class="col-md-6">
 	        <span class="eyebrow mb-1 text-primary">Get in touch with us</span>
 	        <h2>We’ll get back to you as soon as possible.</h2>
 	      </div>
 	    </div>
 	    <div class="row">
 	      <div class="col">
 	        <form>
 	          <div class="form-row mb-1">
 	            <div class="col">
 	              <input type="text" class="form-control form-control-minimal" placeholder="Name">
 	            </div>
 	            <div class="col">
 	              <input type="text" class="form-control form-control-minimal" placeholder="Mail">
 	            </div>
 	            <div class="col">
 	              <input type="text" class="form-control form-control-minimal" placeholder="Phone">
 	            </div>
 	          </div>
 	          <div class="form-row mb-1">
 	            <div class="col">
 	              <textarea class="form-control form-control-minimal" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
 	            </div>
 	          </div>
 	          <div class="form-row mt-3">
 	            <div class="col">
 	              <button class="btn btn-primary px-5">Send Mail</button>
 	            </div>
 	          </div>
 	        </form>
 	      </div>
 	    </div>
 	  </div>
 	</section>
@endsection