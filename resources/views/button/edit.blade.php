@extends('layouts.default');

@section('content')

{!! Form::model($button, ['route' => ['button.update', $button->id],
                          'method' => 'put',
                          'class' => 'form-horizontal'
                         ]) 
!!}

@include('button.partials.form-inputs')

<div class="row">
    <div class="col-xs-6 col-sm-2 col-sm-offset-2">
        {!! Form::submit('Edit',['class' => 'btn btn-primary btn-block ']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-xs-6 col-sm-2">
            {!! Form::open(['route' => ['button.destroy', $button->id], 
                        'method'=> 'DELETE'
                       ]) 
        !!}
        {!! Form::submit('Remove',['class' => 'btn btn-danger btn-block delete-form ']) !!}
        {!! Form::close()!!}
    </div>
</div>

@endsection