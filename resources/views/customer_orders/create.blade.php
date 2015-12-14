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

        <div id="testingDiv1" class="clonedInput">
            <h2 id="reference" name="reference" class="heading-reference">Instrument Section 1</h2>
            @include('partial_views.instrument_form')

                    <!--Base Gas -->
            <hr> Base Gases<hr/>



            <div id="testingDivz1" class="clonedInputz">
                <h2 id="reference" name="reference" class="heading-reference">Base Gases 1</h2>
                <div class="form-group">
                    {!! Form::label('name', 'Name: ') !!}
                    {!! Form::text('name[]', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('concentration', 'Concentration: ') !!}
                    {!! Form::text('concentration[]', null, ['class' => 'form-control']) !!}
                </div>

            </div>
            <div id="add-del-buttonsz">
                <input type="button" id="btnAddz" value="[ + ] add to this form">
                <input type="button" id="btnDelz" value="[ - ] remove the section above">
            </div>

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
    <script src="{{asset('/javascript/basegas.js')}}"></script>
@endsection