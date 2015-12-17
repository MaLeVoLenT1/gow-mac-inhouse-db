<div class="form-group">
    {!! Form::label('instrument_name', 'Instrument Name: ') !!}
    {!! Form::text('instrument_name_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('instrument_serial', 'Instrument Serial: ') !!}
    {!! Form::text('instrument_serial_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('PN', 'P/N: ') !!}
    {!! Form::text('PN_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('series_number', 'Series Number: ') !!}
    {!! Form::text('series_number_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('power', 'Power: ') !!}
    {!! Form::text('power_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('volts', 'Volts: ') !!}
    {!! Form::text('volts_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('frequency', 'Frequency: ') !!}
    {!! Form::text('frequency_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('approvals', 'Approvals: ') !!}
    {!! Form::text('approvals_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('flow_system_number', 'Flow System Number: ') !!}
    {!! Form::text('flow_system_number_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('special_features', 'Special Features: ') !!}
    {!! Form::text('special_features_1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('design_status', 'Design Status: ') !!}
    {!! Form::text('design_status_1', null, ['class' => 'form-control']) !!}
</div>


<div class="Base_Impurity" id="left">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapseBase_1">Base gas & Concentration</a>
                </h4>
            </div>
            <div id="collapseBase_1" class="panel-collapse collapse">
                <div class="panel-body">@include('partial_views.base_gas_form')</div>
            </div>
        </div>
    </div>
</div>


    <div class="Base_Impurity" id="right">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseImpurities_1">Impurities</a>
                    </h4>
                </div>
                <div id="collapseImpurities_1" class="panel-collapse collapse">
                    <div class="panel-body">@include('partial_views.impurities_form')</div>
                </div>
            </div>
        </div>
    </div>


