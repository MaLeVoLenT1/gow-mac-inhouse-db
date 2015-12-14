<!--Base Gas -->
<hr> Base Gases<hr/>

<div id="testingDivz1" class="clonedInputz">
    <h2 id="reference" name="reference" class="heading-reference">Base Gases 1</h2>
    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name[]', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('concentration', 'Concentration: ') !!}
        {!! Form::text('concentration[]', null, ['class' => 'form-control']) !!}
    </div>

</div>
<div id="add-del-buttonsz">
    <input type="button" id="btnAddz" value="[ + ] add to this form">
    <input type="button" id="btnDelz" value="[ - ] remove the section above">
</div>