@extends('app')

@section('title','修改第'.$po_id.'寶可夢')

@section('header','修改第'.$po_id.'寶可夢')
@include('message.errors')

@section('contents')
    <a href="{{ route('pokemons.index')}}">回全寶可夢</a>
   {{-- {!! Form::open(['url'=>'pokemons/update/'.$po_id,'method'=>'patch']) !!}--}}
    {!! Form::model($pokemons, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\pokemonsController@update', $pokemons->id]]) !!}
    @include('pokemons.form', ['submitButtonText'=>"修改"])
    {!! Form::close() !!}
@endsection



