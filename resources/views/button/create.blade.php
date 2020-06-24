@extends('layouts.default');

@section('content')
<div class="row">
    <div class="col-xs-10 col-xs-offset-2">
       <h1>Add Button</h1> 
    </div>
    <div class="col-xs-12">
        {!! Form::open(['route' => 'button.store', 
                        'class' => 'form-horizontal'
                       ]) 
        !!}
        @include('button.partials.form-inputs') 
    </div>
    <div class="col-xs-6 col-sm-2 col-sm-offset-2">
        {!! Form::submit('Add button',
                         ['class' => 'btn btn-primary btn-block']) 
        !!}
        {!! Form::close() !!}
    </div>
</div>
    
@endsection