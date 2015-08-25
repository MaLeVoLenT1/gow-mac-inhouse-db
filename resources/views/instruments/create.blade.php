@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Create New Instrument</h1>
    <hr/>
    {!! Form::open(['url' =>'instruments']) !!}
    @include('instruments.partials.form', ['submitButtonText' => 'Create New Instrument'])

    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')

@endsection