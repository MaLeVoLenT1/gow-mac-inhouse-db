{!! Form::open(array('url'=>'search','method'=>'POST')) !!}
    {!! Form::label('search', 'Search') !!}{!! Form::select('Search',$Field_items['fields'],['class' => 'search_form'],['id' => 'Search']) !!}
    <div id="userSearch">{!! Form::label('with', 'With a') !!}{!! Form::select('User',$Field_items['items']['Users'],['class' => 'search_form']) !!}</div>
    <div id="userCustomer">{!! Form::label('with', 'With a') !!}{!! Form::select('Customer',$Field_items['items']['Customers'],['class' => 'search_form']) !!}</div>
    <div id="userInstrument">{!! Form::label('with', 'With a') !!}{!! Form::select('Instrument',$Field_items['items']['Instruments'],['class' => 'search_form']) !!}</div>
    <div id="userAttachment">{!! Form::label('with', 'With a') !!}{!! Form::select('Attachment',$Field_items['items']['Attachments'],['class' => 'search_form']) !!}</div>
    <div id="userBaseGas">{!! Form::label('with', 'With a') !!}{!! Form::select('BaseGas',$Field_items['items']['BaseGas'],['class' => 'search_form']) !!}</div>
    <div id="userImpurities">{!! Form::label('with', 'With a') !!}{!! Form::select('Impurities',$Field_items['items']['Impurities'],['class' => 'search_form']) !!}</div>
    <div id="add-del-buttonsz">
        <input type="button" id="btnAdda" value="And" onclick="Attachments(1)">
    </div>
    {!! Form::label('of', 'of') !!}{!! Form::text('Of', null, ['class' => 'search_form_table']) !!}

{!! Form::close() !!}

