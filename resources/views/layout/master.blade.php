<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" to="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- --CSS BOOSTRAP-- --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/924b5e10e1.js" crossorigin="anonymous"></script>

         {{-- --CSS SWIPER -- --}}
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
         <!-- Include Select2 from CDN -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
         {{-- --CSS-- --}}
         <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet" type="text/css" /> {{-- -- Css หน้า Login -- --}}
         <link href="{{ asset('/assets/css/contact/contact.css') }}" rel="stylesheet" type="text/css" /> {{-- -- Css หน้า contact -- --}}
         <link href="{{ asset('/assets/css/searchResulte/searchResulte.css') }}" rel="stylesheet" type="text/css" /> {{-- -- Css หน้า searchResulte -- --}}

         {{-- <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet" type="text/css" /> --}}
         <link href="{{ asset('/assets/css/dashboardcss/dashboard.css') }}" rel="stylesheet" type="text/css"/>
         <link href="{{ asset('/assets/css/propertycss/property.css') }}" rel="stylesheet" type="text/css"/>
         <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css" />

         <link href="{{ asset('/assets/css/re-spacing.css') }}" rel="stylesheet" type="text/css" />   {{-- -- Css re-pacing -- --}}

         {{-- @if (isset($main))
            @foreach ($main as $item)
                <link href="{{ asset('/assets/css/'.$item.'.css') }}" rel="stylesheet" type="text/css" />
            @endforeach
         @endif --}}


         {{-- @if(isset($a['css']))
           @foreach ($a['css'] as $item)
           <link href="{{ asset('/assets/css/dashboardcss/'.$item) }}" rel="stylesheet" type="text/css"/>
           @endforeach
         @endif --}}


</head>

<body>
    @include('layout.menu')
    @yield('content')
    @include('layout.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/924b5e10e1.js" crossorigin="anonymous"></script>
    {{-- Image popup --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Include Select2 from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Include CKeditor from CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <!-- Include slick from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="module" crossorigin="" src="{{ asset('/assets/js/dashboardjs/dashboard.js') }}"></script>
    <script type="module" crossorigin="" src="{{ asset('/assets/js/propertyjs/property.js') }}"></script>
    <script src="{{ asset('/assets/js/masterIndex.js') }}"></script>
    <script src="{{ asset('/assets/js/login.js') }}"></script>
    <script src="{{ asset('/assets/js/searchResulte/searchResulte.js') }}"></script>
    <script src="{{ asset('/assets/js/contact/contact.js') }}"></script>


</body>
</html>
