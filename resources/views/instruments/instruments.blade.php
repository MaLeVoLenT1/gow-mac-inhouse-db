@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>General Information</h1>
    <a href="{{url('instruments/create')}}">Create New Instrument</a>
    @foreach($instruments as $instrument)
        <article>

        </article>

    @endforeach
@endsection


@section('scripts')

@endsection