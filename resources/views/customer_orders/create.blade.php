@extends('master')

@section('css')
@endsection



@section('body')

        <h1>Create New Customer & Order</h1>


        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">Order</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse">
                    <div class="panel-body">

                        {!! Form::open(['url' =>'completed']) !!}
                        @include('partial_views.customer_form', ['submitButtonText' => 'Create Record'])
                        <br>
                        <br>
                        <hr>
                            <h2>Instrument</h2>
                            <div id="add-del-buttons">
                                <input type="button" id="btnAdd" value="[ + ] add to this form">
                                <input type="button" id="btnDel" value="[ - ] remove the section above">
                            </div>
                        <hr/>

                        <div id="instrument1" class="clonedInstrument">
                            <div class="instrument_container">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapseInstru1">Instrument</a>
                                            </h4>
                                        </div>
                                        <div id="collapseInstru1" class="panel-collapse collapse">
                                            <div class="panel-body">@include('partial_views.instrument_form')</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        @include('partial_views.submit_form', ['submitButtonText' => 'Create Record'])
                        {!! Form::close() !!}


                    </div>

                </div>
            </div>
        </div>





    @include('errors.list')
@endsection


@section('scripts')
    <script src="{{asset('/javascript/instruments.js')}}"></script>

@endsection