@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
<h1 class="Page_title">General Information</h1>
<a class="New_record" href="{{url('customers/create')}}">Create New Record</a>
<?php  $increment = $sec_increment = $BGC_increment = $IMP_increment = 0; ?>
@if(isset($General))
    @foreach($General as $General_info)
        <?php  $increment ++;  ?>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseCustomer{{$increment}}"><IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACFUlEQVQ4T42T30uTURiAn/ecz81Nosx+3XXRRTMwLKubIGYGQRCUWWh2s31m/T3adYFIRWUW/QFORVMv/MbmjxULu51jLqdN0G0nvm9R1rzYC4f38J6Xh8Nz3iMcEGfvvpkQUWFEcJe4GYmtvr3T+X+7e1IToe4xYz/t+qf+4vk0K69v1/QfDOgZN/ZgJ/FEnsJOBV9zgNRsnOWXt+oDtD74aKIDYWIz6+S3yzSeaCKTXGF59GZ9gHO9n0zEvsbUbJaNnxX8x5tYT66yNHKjFlAVpsMohfxeKE0kepXpuRz5YgX/sSCZRApEeV7BlQsYeSWh7nfGfuIKE4xnvHrubmYWNsjvVDh1+hBXzgS82v4YGXWQ0L0xYw924STzbBb2EK1QWnl5q1imIoLVaHGkyao+qRLEUkiggS+zKSTU895EH19naiFH7kcVgBJKRiiXDcrSWIEGrAaF9sDi9Ri/RX4pjbTeHzeRgU7mvxbJbZcp7kEJONnsYzO7g9EaX0vwD0C5NwAqxrDueIAPE6J1WJTGledmV2bfo8vMOJsU9gTf0SC5RNqr75tMV8f3AwepLRIzff2X+JwoeAB/S5BsPI3zrKO+OTgf/QvYKikPkHHSOMMX6wVMmr7+DuZWtimUhMbDATLxbywOXagTYE+a3ocdzK/tUtgFn0+TTayxONReH6DNnppQSlXF6qpYRMec4faa7/wLXtfC2PlNlcwAAAAASUVORK5CYII="> </a>&nbsp;
                        <a class="user_name" href="{{action("OrdersController@show", [$General_info->id])}}" >{{$General_info->customer_name}}</a>
                        @include('partial_views.customer_delete')
                        <a class="tiny_links" href="{{action("OrdersController@edit", [$General_info->id])}}"><IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABZElEQVQ4T2P0zuj9/+/fX4Z/f/8w/Pv7l+HfPwj9H0rD+FjF/v1hYAQZkBblzvDv/z8Gb+EvDMSAxbd/M/z/949h8tRZCAMmdHcw7GzPIkY/g3vlNIbohGRUA27fe8hQFO1KlAG5zbMYDPW1MQ3IMxEkyoDCVeewGzAMXJBuKMDAzsyINxy+//7LULX+IvYw+Pv3LwNW/AdTHGssgDQfPXeH4eePHwx/f/9i+PPnF8Pf3z8Z/oJpCJ/x318Gcwsz3C44ePoWw6reHIYf378wvHnzhkFCQoKBg4OD4dOnTwz/GZgY3CPzGaytLTEN+PjpM8Pzl68ZQAZsnV7MkN88h+HH928MXeXxcAN4eHgYrHxTMQ2wt9BmUFWUYvj48TPDqm3HwQa4xjeCnbxhWhl+A7wyeub///cvwd5Ch0FNUZphzsrdBA3IzUlDZCZQnHmkdoANgWXnzjxfnFGZWTsDnuVBWR0AxVhVsKGO62wAAAAASUVORK5CYII="></a>
                        <a class="tiny_links" href="#">ORDER</a>
                    </h4> <!--  General Information Title Generation -->
                </div>
                <div id="collapseCustomer{{$increment}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!--General_Information ID -->
                        <div class="instrument_id">
                           <span class="num_id">{{$General_info->id}}</span>
                        </div>
                        <!--General_Information Order Number -->
                        <span class="blue_info">Order Number:</span> {{$General_info->order_number}}
                        <!--General_Information Quote Number -->
                        &nbsp;<span class="blue_info">Quote Number:</span> {{$General_info->quote_number}}<br>
                        <!--General_Information Address -->
                        <span class="blue_info">Address:</span> {{$General_info->address}}<br>
                        <!--General_Information Date Ordered -->
                        <span class="blue_info">Date Ordered:</span> {{$General_info->date_ordered}}<br>

                        <!-- Instrument Information -->
                        <hr>
                            <!--Create New Instrument -->
                            Instrument Orders  <a class="New_record" href="{{url('instruments/create')}}">~New Instrument</a>

                            @foreach($General_info ->instruments as $instrument)

                                <?php  $sec_increment ++;  ?>
                                <div class="instrument_container">
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                            <!-- Instrument Panel Name -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#sec_collapse{{$sec_increment}}">Serial #{{$instrument->instrument_serial}}<br></a>
                                                </h4>
                                            </div>

                                            <div id="sec_collapse{{$sec_increment}}" class="panel-collapse collapse">
                                                <!-- Panel Body Start -->
                                                <div class="panel-body">

                                                    <!-- Instrument ID -->
                                                    <div class="instrument_id">
                                                        <span class="num_id">{{$instrument->id}}</span>
                                                    </div>
                                                    <!-- Instrument Serial -->
                                                    <span class="blue_info">Serial:</span> {{$instrument->instrument_serial}}
                                                    &nbsp;
                                                    <!-- Instrument PN -->
                                                    <span class="blue_info">P/N:</span> {{$instrument->PN}}
                                                    <br>

                                                    <!-- Instrument Type-->
                                                    Type: {{$instrument->instrument_type}} &nbsp;
                                                    <!-- Series Number -->
                                                    Series Number: {{$instrument->series_number}}
                                                    <br>
                                                    <!-- Approvals -->
                                                    Approvals: {{$instrument->approvals}}
                                                    <br>
                                                    <!-- Flow System Number -->
                                                    Flow System Number: {{$instrument->flow_system_number}}
                                                    <br>
                                                    <!-- Special Features -->
                                                    Special Features: {{$instrument->special_features}}
                                                    <br>
                                                    <!-- Design Status -->
                                                    Design Status: {{$instrument->design_status}}
                                                    <br>
                                                    <!-- Notes-->
                                                    Notes: {{$instrument->notes}}
                                                    <br>


                                                    <table class="table table-hover table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <td><span class="blue_info">Power</span></td>
                                                            <td>{{$instrument->power}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="blue_info">Volts</span></td>
                                                            <td>{{$instrument->volts}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="blue_info">Frequency</span></td>
                                                            <td>{{$instrument->frequency}}</td>

                                                        </tr>
                                                        </tbody>
                                                    </table>



                                                    <div class="panel-group">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" href="#collapseBGC{{$BGC_increment}}">Base Gas & Concentration</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseBGC{{$BGC_increment}}" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <table class="table table-hover table-striped">

                                                                        <thead><tr>     <th>Base Gas</th>   <th>Concentration</th>      </tr></thead>

                                                                        <tbody>
                                                                            @foreach($instrument -> base_gas_concentration as $base_gas)
                                                                                <?php $BGC_increment++; ?>
                                                                                <tr>
                                                                                    <td>{{$base_gas -> name}}</td>
                                                                                    <td>{{$base_gas -> concentration}}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel-group">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" href="#collapseIMP{{$IMP_increment}}">Impurities</a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseIMP{{$IMP_increment}}" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <table class="table table-hover table-striped">

                                                                        <thead><tr>     <th>Impurity</th>   <th>Percentage</th>      </tr></thead>

                                                                        <tbody>
                                                                        @foreach($instrument -> impurities as $impurity)
                                                                            <?php $IMP_increment++; ?>
                                                                            <tr>
                                                                                <td>{{$impurity -> name}}</td>
                                                                                <td>{{$impurity -> percentage}}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
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
                            @endforeach
                        <hr/>
                        <span class="left">Created At: {{$General_info->created_at}}</span><span class="right">  Updated At: {{$General_info->updated_at}}</span>

                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endif
@endsection


@section('scripts')

@endsection