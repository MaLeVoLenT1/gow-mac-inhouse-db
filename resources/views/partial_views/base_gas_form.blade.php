<!--Base Gas -->
<hr> Base Gases<hr/>

<div id="gas1" class="clonedInputz">
    <h2 id="reference" name="reference" class="heading-reference">Base Gases 1</h2>
    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name_1[]', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('concentration', 'Concentration: ') !!}
        {!! Form::text('concentration_1[]', null, ['class' => 'form-control']) !!}
    </div>

</div>
<div id="add-del-buttonsz">
    <input type="button" id="btnAddzz" value="[ + ] add to this form" onclick="Gas(1)">
    <input type="button" id="btnDelz" value="[ - ] remove the section above">
</div>