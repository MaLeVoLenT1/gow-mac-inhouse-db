<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse{{$sec_increment}}BGC{{$BGC_increment}}">Base Gas & Concentration</a>
            </h4>
        </div>
        <div id="collapse{{$sec_increment}}BGC{{$BGC_increment}}" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-hover table-striped">

                    <thead><tr>     <th>Base Gas</th>   <th>Notes</th>      </tr></thead>

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