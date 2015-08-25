@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
<h1>General Information</h1>
<a href="{{url('orders/create')}}">Create New Record</a>
    @foreach($General as $General_info)
        <article>
            <h2> <a href="{{action("OrdersController@show", [$General_info->id])}}" >{{$General_info->customer_name}}</a></h2>
            <hr/>
            <a href="{{action("OrdersController@destroy", [$General_info->id])}}">DELETE</a> | <a href="{{action("OrdersController@edit", [$General_info->id])}}">EDIT</a> | <a href="#">ORDER</a>
            <hr/>
            ID: {{$General_info->id}}<br>
            Address: {{$General_info->address}}<br>
            Order Number: {{$General_info->order_number}}<br>
            Quote Number: {{$General_info->quote_number}}<br>
            Date Ordered: {{$General_info->date_ordered}}<br>
            <br>
            Created At: {{$General_info->created_at}}<br>
            Updated At: {{$General_info->updated_at}}<br>
            @foreach($General_info -> instrument as $instrument)
                Instrument Type: {{$instrument->instrument_type}}
            @endforeach
            <br>
        </article>

    @endforeach
@endsection


@section('scripts')

@endsection