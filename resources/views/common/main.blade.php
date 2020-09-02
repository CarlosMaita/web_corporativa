<!DOCTYPE html>
<html lang="es">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        @yield('title')
        
        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/vendor.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
      </head>
   
</head>
<body>
    @yield('content')

    {{-- footer --}}
    @include('common.footer')
    
    <!-- scripts -->
     <script src="{{asset('js/vendor.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>
</body>
</html>