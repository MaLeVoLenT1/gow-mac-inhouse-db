<!--Impurities -->
<div id="impurity1" class="ClonedImpurity">
    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('impurity_name_1[]', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('percent', 'Percentage: ') !!}
        {!! Form::text('impurity_percent[]', null, ['class' => 'form-control']) !!}
    </div>

</div>
<div id="add-del-buttonsz">
    <input type="button" id="btnAddImpurity" value="[ + ]" onclick="Impurity(1)">
    <input type="button" id="btnDelImpurity" value="[ - ]">
</div>