<html>
<title>
    單一屬性
</title>
<body>
<h1>
    單一屬性
</h1>
<?php echo $property_id;?><br/>
寶可夢名稱：{{$name}}<br/>
屬性：{{$grop}}<br/>
主場：{{$area}}<br/>
<a href="<?php echo route('property.index');?>">回全屬性</a>
</body>
</html>
