@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Instrument Information</h1>
    <a href="{{url('instruments/create')}}">Create New Instrument</a>
    @foreach($instruments as $instrument)
        <article>
            <h2> Instrument ID:{{$instrument -> id}}</h2>
            <hr/>
            <a href="{{action("InstrumentsController@destroy", [$instrument->id])}}">DELETE</a> | <a href="{{action("InstrumentsController@edit", [$instrument->id])}}">EDIT</a> | <a href="#">ORDER</a>
            <hr/>
            Customer Name: {{$instrument->customer_id}}<br>
            Instrument Type: {{$instrument->instrument_type}}<br>
            Instrument Serial: {{$instrument->instrument_serial}}<br>
            PN: {{$instrument->PN}}<br>
            Series Number: {{$instrument->series_number}}<br>
            <br>
            Power: {{$instrument->power}}<br>
            Volts: {{$instrument->volts}}<br>
            Frequency: {{$instrument->frequency}}<br>
            <hr>
            Impurities | <a href="{{url('instruments/impurities/add')}}">ADD New</a>
            <hr/>
            <hr>
            Base Gas & Concentration | <a href="{{url('instruments/basegas_concentration/add')}}">ADD New</a>
            <hr/>
            <br>
            Approvals: {{$instrument->approvals}}<br>
            Flow System Number: {{$instrument->flow_system_number}}<br>
            Special Features: {{$instrument->special_features}}<br>
            Design Status: {{$instrument->design_status}}<br>
            Notes: {{$instrument->notes}}<br>
            <hr>
            Attachments & Drawings| <a href="{{url('instruments/attachments/add')}}">ADD New</a>
            <hr/>
            <hr>
            Other Devices | <a href="{{url('instruments/other_devices/add')}}">ADD New</a>
            <hr/>
            <br>
            Created At: {{$instrument->created_at}}<br>
            Updated At: {{$instrument->updated_at}}<br>
            <br>
        </article>

    @endforeach
@endsection


@section('scripts')

@endsection