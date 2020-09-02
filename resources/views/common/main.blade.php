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



        <script src="{{asset('js/vendor/floating_whatsapp/jquery-3.3.1.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('js/vendor/floating_whatsapp/floating-wpp.min.css')}}">
        <link rel="stylesheet" href="{{asset('js/vendor/floating_whatsapp/floating-wpp.min.js')}}">
      </head>
   
</head>
<body>
    @yield('content')
    
    {{-- footer --}}
    @include('common.footer')
    <div id="WAButton"></div>

    <script type="text/javascript">  
       $(function() {
         $('#WAButton').floatingWhatsApp({
           phone: '1231231231', //WhatsApp Business phone number International format-
           //Get it with Toky at https://toky.co/en/features/whatsapp.
           headerTitle: 'Chat with us on WhatsApp!', //Popup Title
           popupMessage: 'Hello, how can we help you?', //Popup Message
           showPopup: true, //Enables popup display
           buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
           //headerColor: 'crimson', //Custom header color
           //backgroundColor: 'crimson', //Custom background button color
           position: "right"    
         });
       });
    </script>  

    <!-- scripts -->
     
     <script src="{{asset('js/vendor.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>


</body>
</html>