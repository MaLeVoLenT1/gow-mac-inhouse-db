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