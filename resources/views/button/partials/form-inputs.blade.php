<div class="form-group">
    {!! Form::label('title','Title:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>    
</div>
<div class="form-group">
    {!! Form::label('link','Link:',['class' => 'col-sm-2 control-label']) !!}
     <div class="col-sm-6">
        {!! Form::text('link',null, ['class' => 'form-control']) !!}
     </div>
</div>
<div class="form-group">
    {!! Form::label('color','Color:',['class' => 'col-sm-2 control-label']) !!}
     <div class="col-sm-6">
        {!! Form::select('color',$options,null, ['class' => 'form-control']) !!}
     </div>
</div>
