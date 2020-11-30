<!DOCTYPE html>
<html lang="es">
  <head>
         <!-- css -->
         <link rel="stylesheet" href="{{asset('css/vendor.css')}}" />
         <link rel="stylesheet" href="{{asset('css/style.css')}}" />
         <link rel="stylesheet" href="{{asset('js/vendor/floating_whatsapp/floating-wpp.min.css')}}">
         <!--Floating WhatsApp css-->
        <link rel="stylesheet" href="{{asset('css/floating-wpp.css')}}" />

        <link rel="prefetch" as="font" href="{{asset('fonts/icomoon.ttf?q2xewv')}}">

        <link rel="prefetch" as="script" href="{{asset('fonts/icomoon.ttf?q2xewv')}}">
        <link rel="prefetch" as="script" href="{{asset('fonts/icomoon.ttf?q2xewv')}}">
        <script src="{{asset('js/vendor/floating_whatsapp/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/vendor/floating_whatsapp/floating-wpp.min.js')}}"></script>

      <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
      </style>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="oxas tech" />
      <meta name="copyright" content="Distrialimentos del centro CA" />
      <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
      @yield('title')
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179222113-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-179222113-1');
      </script>
</head>
<body>
    @yield('content')

    
    {{-- footer --}}
    @include('common.footer')
    
    <!--Div where the WhatsApp will be rendered-->
    <div id="WAButton" style="border-radius: 50%; z-index:100"></div>
  

    <script type="text/javascript">  
     $(function() {
      $('#WAButton').floatingWhatsApp({
        phone: '584244010776', //WhatsApp Business phone number International format-
        //Get it with Toky at https://toky.co/en/features/whatsapp.
        headerTitle: 'Atención al Cliente', //Popup Title
        popupMessage: 'Hola, ¿Como podemos ayudarte?', //Popup Message
        showPopup: true, //Enables popup display
        buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
        headerColor: '#02518D', //Custom header color
        // backgroundColor: '#02518D', //Custom background button color
        position: "right"    
      });
    });
    </script>  
 

    <!-- scripts --> 
     
     <script src="{{asset('js/vendor.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>

    

</body>
</html>