<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="RSPG" />
    <meta name="description" content="RSPG &#8211; Rumah Sakit Paru Dr. M. Goenawan Partowidigdo" />
    <meta name="author" content="Iman Ifa" />

    <link rel="shortcut icon" href="images/favicon.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('tema/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('tema/css/themify-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('tema/css/flaticon.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('tema/css/shortcodes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('tema/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('tema/css/responsive.css') }}">

    <title>@yield("title", "Main")  RSPG</title>
</head>

<body>

    

        @include('layouts.components.web.header')
      
   
        <div class="site-main">
            
        @yield('content')
            <section class="ttm-row row-top-section clearfix">
                <div class="container p-5">
                    <h1>@yield("title",)</h1>
                    
                    
                </div>
                
            </section>

        </div>
        

        @include('layouts.components.web.footer')

        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>

    </div>

</body>


<script src="{{ url('tema/js/jquery.min.js') }}"></script>
<script src="{{ url('tema/js/tether.min.js') }}"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="{{ url('tema/js/jquery.easing.js') }}"></script>
<script src="{{ url('tema/js/jquery-waypoints.js') }}"></script>
<script src="{{ url('tema/js/jquery-validate.js') }}"></script>
<script src="{{ url('tema/js/owl.carousel.js') }}"></script>
<script src="{{ url('tema/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ url('tema/js/numinate.min.js') }}"></script>
<script src="{{ url('tema/js/jquery.event.move.js') }}"></script>
<script src="{{ url('tema/js/jquery.twentytwenty.js') }}"></script>
<script src="{{ url('tema/js/booked-calendar.js') }}"></script>
<script src="{{ url('tema/js/main.js') }}"></script>
<!-- Revolution Slider -->
<script src="{{asset('tema/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/slider.js')}}"></script>

<script src="{{asset('tema/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/slider.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

<script src="{{asset('tema/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('tema/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>

    

</html>