<html>
<div align="center">
<title>
    單一寶可夢
</title>
<body>
<h1>
    單一寶可夢
</h1>
編號：{{$id}}<br/>
神奇寶貝：{{$name}}<br/>
派系編號：{{$team_num}}<br/>
身高：{{$height}}m<br/>
體重：{{$weight}}kg<br/>
進化可能：{{$growing}}<br/>
地區：{{$group}}<br/>
出現場所：{{$place}}<br/>
<a href="{{ route('pokemons.index')}}">回全寶可夢</a>
</body>
</div >
</html>
