<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title>
    新增單一屬性
</title>
</head>
<body >
<br>
<h1>
    新增單一屬性
</h1>
<a href="{{ route('property.index')}}">回全屬性</a><br>
<FORM action="propertyController.php" method="post">
    派系：<INPUT TYPE="TEXT" NAME="property" SIZE="20" id="property"><br>
    特性：<INPUT TYPE="TEXT" NAME="characteristic" SIZE="20" id="characteristic"><br>
    主場：<INPUT TYPE="TEXT" NAME="home" SIZE="20" id="home"><br>
    弱點屬性：<INPUT TYPE="TEXT" NAME="weakness" SIZE="20" id="weakness"><br>
    <INPUT TYPE="SUBMIT"  Name="go"  VALUE="送出資料">
    <INPUT TYPE="RESET" Name="again" VALUE="重新填寫">
</FORM>
</body>
</html>
