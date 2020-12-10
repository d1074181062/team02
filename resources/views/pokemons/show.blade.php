<html>
<div align="center">
<title>
    單一寶可夢
</title>
<body>
<h1>
    單一寶可夢
</h1>
編號：{{$pokemons->id}}<br/>
神奇寶貝：{{$pokemons->name}}<br/>
派系名稱：{{$property_name}}<br/>
身高：{{$pokemons->height}}m<br/>
體重：{{$pokemons->weight}}kg<br/>
進化可能：{{$pokemons->growing}}<br/>
地區：{{$pokemons->group}}<br/>
出現場所：{{$pokemons->place}}<br/>
<a href="{{ route('pokemons.index')}}">回全寶可夢</a>
</body>
</div >
</html>
