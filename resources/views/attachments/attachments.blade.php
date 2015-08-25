@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Attachments</h1>
    <a href="{{url('attachments/add')}}">Add New Attachment</a>
    {!! Form::open(
    array(
    'URL' => 'instruments/attachments',
    'class' => 'form',
    'novalidate' => 'novalidate',
    'files' => true)) !!}

    <div class="form-group">
        {!! Form::label('File Name') !!}
        {!! Form::text('name', null, array('placeholder'=>'placeholder')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file') !!}
        {!! Form::file('image', null) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Upload!') !!}
    </div>
    {!! Form::close() !!}
    <h1>List</h1>
    <div class="row">
        <ul>

        </ul>
    </div>

@endsection


@section('scripts')

@endsection