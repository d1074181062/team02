@extends('app')

@section('title','修改屬性')

@section('header','修改屬性')

@section('contents')
    <a href="{{ route('property.index')}}">回全屬性</a>

    {{--{!! Form::open(['url'=>'property/store']) !!}--}}
    {!! Form::model($property, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\propertyController@update', $property->id]]) !!}
    @include('property.form', ['submitButtonText'=>"修改"])
    {!! Form::close() !!}



@endsection
