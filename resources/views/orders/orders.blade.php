@extends('master')

@section('css')
@endsection

@section('header')

@endsection


@section('body')
<h1>General Information</h1>
<a href="{{url('orders/create')}}">Create New Record</a>
<?php  $increment = $sec_increment = 0; ?>
    @foreach($General as $General_info)
        <?php  $increment ++;  ?>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse{{$increment}}">+</a>&nbsp;
                        <a class="user_name" href="{{action("OrdersController@show", [$General_info->id])}}" >{{$General_info->customer_name}}</a>
                        <a class="DELETE" href="{{action("OrdersController@destroy", [$General_info->id])}}"><IMG src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACd0lEQVQ4T22Tz0sbQRTH3+zPbDaJa0SLtYdoTSgeyhwEPfQS8A9Q/AcMePBo/xL9D+J/EBFqBJUBtQfxMpWilxZCW6RaN8mazJrdZnfLTLPbWByYfcPO+3zfm/dmEAzGp/X1Lb/VKvw4Pq6stNvt+P+wrRUK1iTG1b7nNd7V6+/5HuKfzxsb1TzGazdHR9C8vqaMsfJKo/FEZAATa3YW35+dQe/hYWfp6qqCeOTx+fnNm8ND8JtNiIIAure31PW8RCSBZ2awfXoqfPhgjG2ji9XVGkJo2bftvxtBAFEYArNt6vp+mTtOYkys6Wlsn5yI/Xh0ut1dVLMsy5yaIubYGI5h4RSG0HUcas3NwegwHEXi3A+uS91+vyxqwFNM6zox83khwmEUhsLmFxehfX4uInNnFEXQZoy6YSiOKAQSEU0jZi6HY5g7R54HUa8nQO7clWXKBnDShWERQ1VJxjBw0GpB4DggAYAkSSDLMnQUhT4axpMOJRnEWUyUSiSt67hJCMgDkMN87agqZar6vACvw3ipRDKWhe8PDkAGAIWDsvzPKgrYANSRpEQkKeJ4sSjgX/W6gAWoKGKqAxsL/gwC2oyLKCIXi8S0LHy3vw9SFImIHGSaRmVFgQlZxqqqCiE+ufi3Xo/e+X4ZfVxaqhmWtXz74YOA45R7qRR9TKfFRRqJIvJK17GmaaANhBBC8KXT2UVkYWHLpXQzhrlAzzCob5pPrnJeksjrbBandF2I8M58dZxtUYO9bLaqet4ah33TpL8zmWcf0wtdJ29GR7GRSsF3xnZKFxeVpI17udwWkuVCf2Sk8v9LHL4nL9PpqqEojbeXl+I5/wFKtD7oFPdrhwAAAABJRU5ErkJggg=="> </a>
                        <a class="tiny_links" href="{{action("OrdersController@edit", [$General_info->id])}}">EDIT</a>
                        <a class="tiny_links" href="#">ORDER</a>
                    </h4>
                </div>
                <div id="collapse{{$increment}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        ID: {{$General_info->id}}<br>
                        Address: {{$General_info->address}}<br>
                        Order Number: {{$General_info->order_number}}<br>
                        Quote Number: {{$General_info->quote_number}}<br>
                        Date Ordered: {{$General_info->date_ordered}}<br>
                        <br>
                        Created At: {{$General_info->created_at}}<br>
                        Updated At: {{$General_info->updated_at}}<br>

                        @foreach($General_info ->instruments as $instrument)
                            <?php  $sec_increment ++;  ?>
                            <div class="instrument_container">
                                <hr>Instrument Orders<hr/>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#sec_collapse{{$sec_increment}}">Serial #{{$instrument->instrument_serial}}<br></a>
                                            </h4>
                                        </div>
                                        <div id="sec_collapse{{$sec_increment}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Instrument ID: {{$instrument->id}}<br>
                                                Type: {{$instrument->instrument_type}}<br>
                                                Serial: {{$instrument->instrument_serial}}<br>
                                                P/N: {{$instrument->PN}}<br>
                                                Series Number: {{$instrument->series_number}}<br>
                                                <br>
                                                Power: {{$instrument->power}}<br>
                                                Volts: {{$instrument->volts}}<br>
                                                Frequency: {{$instrument->frequency}}<br>
                                                Approvals: {{$instrument->approvals}}<br>
                                                Flow System Number: {{$instrument->flow_system_number}}<br>
                                                Special Features: {{$instrument->special_features}}<br>
                                                Design Status: {{$instrument->design_status}}<br>
                                                Notes: {{$instrument->notes}}<br>
                                                Created At: {{$instrument->created_at}}<br>
                                            </div>
                                            <div class="panel-footer">Panel Footer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection


@section('scripts')

@endsection