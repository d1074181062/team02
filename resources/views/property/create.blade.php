@extends('app')

@section('title','新增屬性')

@section('header','新增屬性')

@section('contents')
    {!! Form::open(['url'=>'property/store']) !!}
    @include('property.form', ['submitButtonText'=>"新增"])
    {!! Form::close() !!}



@endsection
