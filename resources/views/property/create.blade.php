@extends('app')

@section('title','新增屬性')

@section('header','新增屬性')

@section('contents')
    {!! Form::open(['url'=>'property/store']) !!}
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
        {!! Form::submit('新增',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}



@endsection
