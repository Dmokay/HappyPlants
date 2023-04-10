<!DOCTYPE html>
<html class="" lang="en">
   <head>
      <title>Moodboard</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.ico">
      <!-- bootstrap min-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <!-- fontawesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.min.css')}}">
      <!-- OwlCarousel2 -->         
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
      <!-- fancybox -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.fancybox.css')}}">
      <!-- animate -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
      <!-- style -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
      <!-- googleapis -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
   </head>

                @include('ui.layouts.includes.header')

                @yield('content')

                @include('ui.layouts.includes.footer')

    <!-- scroll -->
    <a href="#" id="scroll"></a>
      <!-- jquery-3.4.1 -->
      <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
      <!-- owl.carousel -->
      <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
      <!-- bootstrap.min -->
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <!-- popper.min -->
      <script src="{{asset('assets/js/popper.min.js')}}"></script>
      <!-- wow.js - v1.2.1 -->
      <script src="{{asset('assets/js/wow.min.js')}}"></script>
      <!-- Font Awesome Free 5.15.1 -->
      <script src="{{asset('assets/js/all.min.js')}}"></script>
      <!--   fancybox -->
      <script  src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <script>
      	
	</script>
   </body>
</html>
