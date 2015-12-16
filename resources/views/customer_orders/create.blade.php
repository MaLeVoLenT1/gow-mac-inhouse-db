@extends('master')

@section('css')
@endsection



@section('body')
    <hr>
        <h1>Create New Customer & Order</h1>

    <hr/>

    {!! Form::open(['url' =>'completed']) !!}
        @include('partial_views.customer_form', ['submitButtonText' => 'Create Record'])
        <br>
        <br>
        <hr>    <h2>Instrument</h2>     <hr/>

        <div id="instrument1" class="clonedInstrument">
            <h2 id="reference" name="reference" class="heading-reference">Instrument Section 1</h2>
            @include('partial_views.instrument_form')
        </div>
        <br>
        <br>
        <div id="add-del-buttons">
            <input type="button" id="btnAdd" value="[ + ] add to this form">
            <input type="button" id="btnDel" value="[ - ] remove the section above">
        </div>
        @include('partial_views.submit_form', ['submitButtonText' => 'Create Record'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')
    <script src="{{asset('/javascript/instruments.js')}}"></script>

@endsection