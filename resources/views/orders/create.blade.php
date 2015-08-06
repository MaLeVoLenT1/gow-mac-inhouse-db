@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Create New Order</h1>
    <hr/>
    {!! Form::open(['url' =>'orders']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address: ') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('order_number', 'Order Number: ') !!}
            {!! Form::text('order_number', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('quote_number', 'Quote Number: ') !!}
            {!! Form::text('quote_number', null, ['class' => 'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::submit('Add Order', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@endsection


@section('scripts')

@endsection