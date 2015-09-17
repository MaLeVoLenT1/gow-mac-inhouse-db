@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Edit: {!! $General -> customer_name !!}</h1>
    <hr/>
    {!! Form::model($General, ['method' => 'PATCH', 'action' =>['OrdersController@update', $General -> id]]) !!}
        @include('partial_views.customer_form')
        @include('partial_views.submit_form', ['submitButtonText' => 'Edit Instrument Record'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')

@endsection