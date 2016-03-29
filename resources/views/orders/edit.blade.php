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
    <?php $increment = 0; ?>
    @foreach($General ->instruments as $instrument)
        <div class="instrument_container">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#sec_collapse{{$increment}}">{{$instrument->instrument_name}}<br></a>
                        </h4>
                    </div>
                    <div id="sec_collapse{{$increment}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <!-- Instrument ID -->
                            <div class="instrument_id"><span class="num_id">{{$instrument->id}}</span></div>
                            {!! Form::hidden('instrument_id_'.$increment, $instrument->id, ['class' => 'form-control']) !!}
                            <div class="form-group">
                                {!! Form::label('instrument_name', 'Instrument Name: ') !!}
                                {!! Form::text('instrument_name_'.$increment, $instrument->instrument_name, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('instrument_serial', 'Instrument Serial: ') !!}
                                {!! Form::text('instrument_serial_'.$increment, $instrument->instrument_serial, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('PN', 'P/N: ') !!}
                                {!! Form::text('PN_'.$increment, $instrument->PN, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('series_number', 'Series Number: ') !!}
                                {!! Form::text('series_number_'.$increment, $instrument->series_number, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('power', 'Power: ') !!}
                                {!! Form::text('power_'.$increment, $instrument->power, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('volts', 'Volts: ') !!}
                                {!! Form::text('volts_'.$increment, $instrument->volts, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('frequency', 'Frequency: ') !!}
                                {!! Form::text('frequency_'.$increment, $instrument->frequency, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('approvals', 'Approvals: ') !!}
                                {!! Form::text('approvals_'.$increment, $instrument->approvals, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('flow_system_number', 'Flow System Number: ') !!}
                                {!! Form::text('flow_system_number_'.$increment, $instrument->flow_system_number, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('special_features', 'Special Features: ') !!}
                                {!! Form::text('special_features_'.$increment, $instrument->special_features, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('design_status', 'Design Status: ') !!}
                                {!! Form::text('design_status_'.$increment, $instrument->design_status, ['class' => 'form-control']) !!}
                            </div>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapseImP">Impurities</a>
                                        </h4>
                                    </div>
                                    <div id="collapseImP" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @foreach($instrument ->impurities as $impurity)
                                                {!! Form::hidden('impurity_id[]', $impurity['id'], ['class' => 'form-control']) !!}
                                                <div id="impurity1" class="ClonedImpurity">
                                                    <div class="form-group">
                                                        {!! Form::label('name', 'Name: ') !!}
                                                        {!! Form::text('impurity_name[]', $impurity['name'], ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('percent', 'Percentage: ') !!}
                                                        {!! Form::text('impurity_percent[]', $impurity['percentage'], ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            @endforeach
                                                <div id="add-del-buttonsz">
                                                    <input type="button" id="btnAddImpurity" value="[ + ]" onclick="Impurity(1)">
                                                    <input type="button" id="btnDelImpurity" value="[ - ]">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <span class="left">Created At: {{$instrument->created_at}}</span><span class="right">  Updated At: {{$instrument->updated_at}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $increment++ ?>
    @endforeach

        @include('partial_views.submit_form', ['submitButtonText' => 'Edit Instrument Record'])

    {!! Form::close() !!}

    @include('errors.list')
@endsection


@section('scripts')
    <script src="{{asset('/javascript/instruments.js')}}"></script>
@endsection