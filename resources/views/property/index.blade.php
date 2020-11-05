<html>
<title>
    全屬性
</title>
<body>
<h1>
    全屬性
</h1>
<a href="<?php echo route('pokemons.index');?>">去全寶可夢</a>
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

        </tr>
    @endforeach
</table>
</body>
</html>
