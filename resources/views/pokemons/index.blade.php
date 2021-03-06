<div align="center">
@extends('app')
@section('title','全寶可夢')
@section('header','全寶可夢')

@section('contents')
        <!--<a align="center" href="{{ route('pokemons.create')}}">新增寶可夢</a>-->
        <!--<a align="center" href="{{ route('pokemons.growing')}}">不可進化寶可夢</a>-->
        <select onchange="location.href=this.options[this.selectedIndex].value">
            <OPTION> 請選擇</OPTION>
            <OPTION   VALUE="{{ route('pokemons.index')}}"> 全寶可夢</OPTION>
            <OPTION   VALUE="{{ route('pokemons.growing')}}"> 不可進化寶可夢</OPTION>
            <OPTION VALUE="{{ route('pokemons.create')}}">新增寶可夢</OPTION>
        </select>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <form action="{{ url('pokemons/group') }}" method='POST'>
                    {!! Form::label('pos', '選取地區：') !!}
                    {!! Form::select('pos', $groups, ['class' => 'form-control']) !!}
                    <input class="btn btn-default" type="submit" value="查詢" />
                    @csrf
                </form>
            </div>
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
        <td align="center">{{$pokemon->propertyss->property}}</td>
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
        <td align="center">
        <Form action="{{url('/pokemons/delete',['id'=>$pokemon->id])}}" method="post">
            <input class="btn btn-default" type="submit" value="刪除" />
            @method('delete')
            @csrf
         </Form>
        </td>

    </tr>
        @endforeach
    </div>
</table>

@endsection



