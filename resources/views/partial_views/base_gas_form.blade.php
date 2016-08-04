<!--Base Gas -->


<div id="gas1" class="clonedInputz">
    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name_1[]', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('concentration', 'Notes: ') !!}
        {!! Form::text('concentration_1[]', null, ['class' => 'form-control']) !!}
    </div>

</div>
<div id="add-del-buttonsz">
    <input type="button" id="btnAddzz" value="[ + ]" onclick="Gas(1)">
    <input type="button" id="btnDelz" value="[ - ]">
</div>