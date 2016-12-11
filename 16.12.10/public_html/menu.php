<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>메뉴판</title>
</head>
<body>
	
<center>
<H3>메뉴판</H3>
<?php
include "db.php";
$query = "select * from 메뉴";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"
	<table width = '400'>
	<td width = '200' align='center'><h4>메뉴</h4></td>  
	<td width = '200' align='center'><h4>가격</h4></td> 
	</table>";

while($row = mysqli_fetch_array($result)){
	echo"
	<table width = '400'>
	<td width = '200' align='center'>$row[메뉴]</td>
	<td width = '200' align='center'>$row[가격]</td>
	</table>";
	
}
	mysqli_close($conn);
?>
<form>
	<input style="width: 100px" type='text' name = '이름' placeholder="삭제할 메뉴이름" formmethod="get" formaction="Orderi.php" accept-charset="UTF-8"/><br>
	<input type='submit' value = '추가' formaction="menuinsert.php" accept-charset="UTF-8"/>
	<input type='submit' value = '삭제' formaction="menudelete.php" accept-charset="UTF-8"/><br>
	<input  type='submit' value = '뒤로' formaction="Storew.php" accept-charset="UTF-8"/>
</form>
</center>
</body>
</html>

