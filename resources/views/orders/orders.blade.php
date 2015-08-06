@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
<h1>Orders</h1>
    @foreach($General as $General_info)
        <article>
            <h2> <a href="{{action("OrdersController@show", [$General_info->id])}}" >{{$General_info->customer_name}}</a></h2>
            ID: {{$General_info->id}}<br>
            Address: {{$General_info->address}}<br>
            Order Number: {{$General_info->order_number}}<br>
            Quote Number: {{$General_info->quote_number}}<br>
            Date Ordered: {{$General_info->date_ordered}}<br>
            <br>
            Created At: {{$General_info->created_at}}<br>
            Updated At: {{$General_info->updated_at}}<br>
            <br>
            <br>
        </article>
    @endforeach
@endsection


@section('scripts')

@endsection