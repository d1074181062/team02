
@extends('app')

@section('title','全屬性')

@section('header','全屬性')

@section('contents')

<table>
    <tr>
        <th>編號</th>
        <th>派系</th>
        <th>特性</th>
        <th>主場</th>
        <th>弱點屬性</th>


    </tr>
    @foreach($properties as $property)
        <tr>
            <td>{{$property->id}}</td>
            <td>{{$property->property}}</td>
            <td>{{$property->characteristic}}</td>
            <td>{{$property->home}}</td>
            <td>{{$property->weakness}}</td>
            <td><a href="{{ route('property.show',['id'=>$property->id])}}">顯示</a></td>
            <td><a href="{{ route('property.edit',['id'=>$property->id])}}">修改</a></td>
        </tr>
    @endforeach
</table>

@endsection

