
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
        <td>{{$pokemon->id}}</td>
        <td>{{$pokemon->name}}</td>
        <td>{{$pokemon->team_num}}</td>
        <td>{{$pokemon->height}}m</td>
        <td>{{$pokemon->weight}}kg</td>
        <td>
        @if ($pokemon->growing=='是')
            <p style="color: blue;">
        @else
            <p style="color: red;">
        @endif
       {{$pokemon->growing}}</p></td>

        <td>{{$pokemon->group}}</td>
        <td>{{$pokemon->place}}</td>
            <td><a href="{{ route('pokemons.show',['id'=>$pokemon->id])}}">顯示</a></td>
            <td><a href="{{ route('pokemons.edit',['id'=>$pokemon->id])}}">修改</a></td>
    </tr>
        @endforeach
</table>

@endsection



