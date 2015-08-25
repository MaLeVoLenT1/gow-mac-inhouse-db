@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
    <h1>Attachments</h1>
    <a href="{{url('instruments/attachments/add')}}">Add New Atatchment</a>
    <form action="add" method="post" enctype="multipart/form-data">
        <input type="file" name="filefield">
        <input type="submit">
    </form>
    <h1>List</h1>
    <div class="row">
        <ul>
            @foreach($entries as $entry)
                <li>{{$entry->filename}}</li>
            @endforeach
        </ul>
    </div>

@endsection


@section('scripts')

@endsection