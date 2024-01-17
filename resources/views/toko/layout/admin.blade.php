
<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
    
  <!--  CSS  -->
  <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("css/style.css")}}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  </head>
  <body>

<main>

  <header>

  @if (Auth::user()->role == 'admin')
  <!--nav = header footer,sidebar-->
  @include('toko.adminpage.navsidebar')
	<!--section konten-->

    <script src="{{asset("js/jquery-1.11.0.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("js/plugins.js")}}"></script>
    <script src="{{asset("js/script.js")}}"></script>
  </body>
</html>