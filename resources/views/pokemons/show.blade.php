<html>
<title>
    單一寶可夢
</title>
<body>
<h1>
    單一寶可夢
</h1>

神奇寶貝：{{$name}}<br/>
派系編號：{{$team_num}}<br/>
身高：{{$height}}<br/>
體重：{{$weight}}<br/>
進化可能：{{$growing}}<br/>
地區：{{$group}}<br/>
出現場所：{{$place}}<br/>
<a href="<?php echo route('pokemons.index');?>">回全寶可夢</a>
</body>
</html>
