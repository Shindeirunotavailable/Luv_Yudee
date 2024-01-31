<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" to="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/chevron-down.css' rel='stylesheet'>


    <script src="https://www.youtube.com/iframe_api"></script>
    {{-- --CSS BOOSTRAP-- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

     {{-- --CSS SWIPER -- --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     {{-- --CSS-- --}}
     <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('/assets/css/hometest.css') }}" rel="stylesheet" type="text/css" />
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0" class="" style="">
    @include('layout.menu')
            @yield('content')
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/924b5e10e1.js" crossorigin="anonymous"></script>

    <script src="{{ asset('/assets/js/indextest.js') }}"></script>
    <script src="{{ asset('/assets/js/login.js') }}"></script>
    <script src="{{ asset('/assets/js/checknull.js') }}"></script>

</body>
</html>
