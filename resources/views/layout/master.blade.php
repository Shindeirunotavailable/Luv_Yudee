

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

         {{-- --CSS-- --}}
         <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('/assets/css/ppcss/dashboard.css') }}" rel="stylesheet" type="text/css"/>
         <link href="{{ asset('/assets/css/propertycss/property.css') }}" rel="stylesheet" type="text/css"/>
         <link href="{{ asset('/assets/css/masterIndex.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('/assets/css/re-spacing.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('layout.menu')
    @yield('content')
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/924b5e10e1.js" crossorigin="anonymous"></script>
    {{-- Image popup --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Include Select2 from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="module" crossorigin="" src="{{ asset('/assets/js/ppjs/script.js') }}"></script>
    <script type="module" crossorigin="" src="{{ asset('/assets/js/propertyjs/property.js') }}"></script>
    <script src="{{ asset('/assets/js/masterIndex.js') }}"></script>
    <script src="{{ asset('/assets/js/login.js') }}"></script>
</body>
</html>
