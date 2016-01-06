<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse{{$sec_increment}}UP{{$UP_increment}}">Uploads</a>
            </h4>
        </div>
        <div id="collapse{{$sec_increment}}UP{{$UP_increment}}" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-hover table-striped">

                    <thead><tr>     <th>Name</th>   <th>File Type</th>      </tr></thead>

                    <tbody>
                    @foreach($instrument -> attachment as $upload)
                        <?php $UP_increment++; ?>
                        <tr>
                            <td>
                                <a href="{{ URL( '/uploads/' . $upload -> original_filename)}}" target="_blank">{{$upload -> original_filename}}</a>
                            </td>
                            <td>{{$upload -> mime}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>