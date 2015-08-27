{!! Form::open(['method'=> 'DELETE', 'class' => 'delete_button_forum', 'route' => ['customers.destroy', $General_info->id]]) !!}
    {!! Form::submit('', ['class' => 'delete_button']) !!}
{!! Form::close() !!}