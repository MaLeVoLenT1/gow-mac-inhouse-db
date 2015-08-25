@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Edit: {!! $Instruments -> id !!}</h1>
    <hr/>
    {!! Form::model($Instruments, ['method' => 'PATCH', 'action' =>['InstrumentsController@update', $Instruments -> id]]) !!}
    @include('instruments.partials.form', ['submitButtonText' => 'Edit Instrument Record'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')

@endsection