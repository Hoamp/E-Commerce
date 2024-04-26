<!DOCTYPE html>
<html>
  <head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <!-- script
    ================================================== -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    
    <div class="search-popup">
        <div class="search-popup-container">

          <form role="search" method="get" class="search-form" action="">
            <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
            <button type="submit" class="search-submit"><svg class="search"><use xlink:href="#search"></use></svg></button>
          </form>

          <h5 class="cat-list-title">Browse Categories</h5>
          
          <ul class="cat-list">
            <li class="cat-list-item">
              <a href="#" title="Mobile Phones">Mobile Phones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Smart Watches">Smart Watches</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Headphones">Headphones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Accessories">Accessories</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Monitors">Monitors</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Speakers">Speakers</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Memory Cards">Memory Cards</a>
            </li>
          </ul>

        </div>
    </div>
    
    @include('partials.header')

    
    @yield('content')

    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>