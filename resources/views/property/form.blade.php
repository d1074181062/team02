<div align="center" class="form-group">
    {!! Form::label('property_property','派系') !!}
    {!! Form::text('property',null,['class'=>'form-control']) !!}
</div>
<div align="center" class="form-group">
    {!! Form::label('property_characteristic','特性') !!}
    {!! Form::text('characteristic',null,['class'=>'form-control']) !!}
</div>
<div align="center" class="form-group">
    {!! Form::label('property_home','主場') !!}
    {!! Form::text('home',null,['class'=>'form-control']) !!}
</div>
<div align="center" class="form-group">
    {!! Form::label('property_weakness','弱點屬性') !!}
    {!! Form::text('weakness',null,['class'=>'form-control']) !!}
</div>

<div align="center" class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
