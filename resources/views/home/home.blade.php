@extends('layout.master')

@section('content')
        <div class="wrapper overhid">

            @include('home.banner')

            {{-- @include('home.boxCity') --}}

            {{-- @include('home.boxForSales') --}}
            
            @include('home.boxForYou')

            @include('home.boxStores')



            
        </div>
@endsection
