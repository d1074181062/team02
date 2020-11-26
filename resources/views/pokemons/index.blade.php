<div align="center">
@extends('app')
@section('title','全寶可夢')
@section('header','全寶可夢')
@section('contents')


<table>
    <tr>
        <th>編號</th>
        <th>神奇寶貝</th>
        <th>派系編號</th>
        <th>身高</th>
        <th>體重</th>
        <th>進化可能</th>
        <th>地區</th>
        <th>出現場所</th>
        <th>操作1</th>
        <th>操作2</th>


    </tr>
    @foreach($pokemons as $pokemon)
    <tr>

        <td align="center">{{$pokemon->id}}</td>
        <td align="center">{{$pokemon->name}}</td>
        <td align="center">{{$pokemon->team_num}}</td>
        <td align="center">{{$pokemon->height}}m</td>
        <td align="center">{{$pokemon->weight}}kg</td>
        <td align="center">
        @if ($pokemon->growing=='是')
            <p style="color: blue;">
        @else
            <p style="color: red;">
        @endif
       {{$pokemon->growing}}</p></td>

        <td align="center">{{$pokemon->group}}</td>
        <td align="center">{{$pokemon->place}}</td>
            <td align="center"><a href="{{ route('pokemons.show',['id'=>$pokemon->id])}}">顯示</a></td>
            <td align="center"><a href="{{ route('pokemons.edit',['id'=>$pokemon->id])}}">修改</a></td>

    </tr>
        @endforeach
    </div>
</table>

@endsection



