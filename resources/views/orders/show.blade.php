@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Orders</h1>
        <article>
            <h2> <a href="{{action("OrdersController@show", [$General->id])}}" >{{$General->customer_name}}</a></h2>
            ID: {{$General->id}}<br>
            Address: {{$General->address}}<br>
            Order Number: {{$General->order_number}}<br>
            Quote Number: {{$General->quote_number}}<br>
            Date Ordered: {{$General->date_ordered}}<br>
            <br>
            Created At: {{$General->created_at}}<br>
            Updated At: {{$General->updated_at}}<br>
            <br>
            <br>
        </article>
@endsection


@section('scripts')

@endsection