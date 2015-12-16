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

@include('partial_views.base_gas_form')

