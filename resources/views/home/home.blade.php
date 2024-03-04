@extends('layout.master')

@section('content')
        <div class="wrapper overhid">

            @include('home.banner')

            @include('home.boxCity')

            @include('home.boxForSales')

            @include('home.boxForRent')
            
            @include('home.boxForYou')

            @include('home.boxStores')

            @include('home.boxApartment')

            @include('home.boxBlog')

            @include('home.boxConstantUpdates')

            @include('home.boxTrusted')
            
            

            
        </div>
@endsection
