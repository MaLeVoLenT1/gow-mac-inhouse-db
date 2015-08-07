@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Create New Order</h1>
    <hr/>
    {!! Form::open(['url' =>'orders']) !!}
    @include('orders.partials.form', ['submitButtonText' => 'Create Customer Record'])

    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')

@endsection