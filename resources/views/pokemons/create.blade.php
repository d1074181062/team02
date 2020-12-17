@extends('app')

@section('title','新增寶可夢')

@section('header','新增寶可夢')
@include('message.errors')
@section('contents')
    <a href="{{ route('pokemons.index')}}">回全寶可夢</a>
    {!! Form::open(['url'=>'pokemons/store']) !!}
    @include('pokemons.form', ['submitButtonText'=>"新增"])
    {!! Form::close() !!}
@endsection
