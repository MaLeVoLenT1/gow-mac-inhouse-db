@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Edit: {!! $Instruments -> id !!}</h1>
    <hr/>
    {!! Form::model($Instruments, ['method' => 'PATCH', 'action' =>['InstrumentsController@update', $Instruments -> id]]) !!}
    @include('partial_views.instrument_form')
    @include('partial_views.submit_form', ['submitButtonText' => 'Edit Instrument Record'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')

@endsection