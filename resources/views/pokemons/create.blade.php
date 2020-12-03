@extends('app')

@section('title','新增寶可夢')

@section('header','新增寶可夢')

@section('contents')
    {!! Form::open(['url'=>'pokemons/store']) !!}
    <div align="center" class="form-group">
        {!! Form::label('pokemon_name','神奇寶貝') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::label('pokemon_team_num','派系編號') !!}
        {!! Form::text('team_num',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::label('pokemon_height','身高') !!}
        {!! Form::text('height',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::label('pokemon_weight','體重') !!}
        {!! Form::text('weight',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::label('pokemon_growing','進化可能') !!}
        {!! Form::text('growing',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::label('pokemon_group','地區') !!}
        {!! Form::text('group',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::label('pokemon_place','出現場所') !!}
        {!! Form::text('place',null,['class'=>'form-control']) !!}
    </div>
    <div align="center" class="form-group">
        {!! Form::submit('新增',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection
