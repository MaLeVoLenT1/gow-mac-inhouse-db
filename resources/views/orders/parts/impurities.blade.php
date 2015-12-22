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