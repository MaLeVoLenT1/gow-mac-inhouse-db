@extends('app')


@section('master_css')
    @yield('css')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/master.css') }}" rel="stylesheet" type='text/css'>
@endsection

@section('content')
    <div class="body">
        @yield('header')
        @yield('body')
    </div>
@endsection



@yield('scripts')
