<div class="form-group">
    {!! Form::label('customer_name', 'Customer Name: ') !!}
    {!! Form::text('customer_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Address: ') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('order_number', 'Order Number: ') !!}
    {!! Form::text('order_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('quote_number', 'Quote Number: ') !!}
    {!! Form::text('quote_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('date_ordered', 'Date : ') !!}
    {!! Form::input('date', 'date_ordered', date('y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>