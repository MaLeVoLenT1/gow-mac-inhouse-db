@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Create New Order</h1>
    <hr/>
    {!! Form::open(['url' =>'customers']) !!}
    @include('partial_views.customer_form')
    @include('partial_views.submit_form', ['submitButtonText' => 'Create Customer Record'])

    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')

@endsection