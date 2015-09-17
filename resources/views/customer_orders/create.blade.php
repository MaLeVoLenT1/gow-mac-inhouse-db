@extends('master')

@section('css')
@endsection

@section('header')

@endsection
@section('body')
    <script type="text/javascript">
        $("document").onload(function(){
            var $button = $('#add-row'),
                    $row = $('.timesheet-row').clone();

            $button.click(function(){
                $row.clone().insertBefore( $button );
            });

        });
    </script>
    <hr>
        <h1>Create New Customer & Order</h1><button id="btn">New Instrument</button>
    <hr/>
    {!! Form::open(['url' =>'customers']) !!}
    @include('partial_views.customer_form', ['submitButtonText' => 'Create Record'])
    <br>
    <br>
    <hr>
        <h2>Instrument</h2>

    <hr/>
            @include('partial_views.instrument_form')
    @include('partial_views.submit_form', ['submitButtonText' => 'Create Record'])
    {!! Form::close() !!}

    @include('errors.list')
    <fieldset id="timesheet-rows">
        <legend>Add Entries</legend>

        <div class="timesheet-row">

            <label>Project:
                <select name="project[]" required>
                    <option value="a" />
                </select>
            </label>

            <label>Department:
                <select name="department[]" required>
                    <option value="a" />
                </select>
            </label>

            <label>Task:
                <select name="task[]" required>
                    <option value="a" />
                </select>
            </label>

            <label>Hours:
                <input type="number" step="0.25" name="hours[]" width="1" placeholder="2.0" required />
            </label>

            <label>Comment:
                <input type="text" name="comment[]" width="50" />
            </label>

        </div>

        <input type="button" id="add-row" name="add-row" value="Add row" />
    </fieldset>










@endsection


@section('scripts')

@endsection