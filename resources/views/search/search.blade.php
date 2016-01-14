@extends('master')

@section('css')
@endsection



@section('body')
    <h1>Search</h1>
    @include('.search.parts.searchForm')

@endsection


@section('scripts')
    <script src="{{asset('/javascript/searchForm.js')}}"></script>
@endsection