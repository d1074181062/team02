<html>
<div align="center">
<title>
    單一屬性
</title>
<body>
<h1>
    單一屬性
</h1>
編號：{{$temp->id}}<br/>
派系：{{$temp->property}}<br/>
特性：{{$temp->characteristic}}<br/>
主場：{{$temp->home}}<br/>
弱點屬性：{{$temp->weakness}}<br/>

<a href="{{ route('property.index')}}">回全屬性</a>


<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">

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
            <td align="center">{{$temp->property}}</td>
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
</body>
</html>

