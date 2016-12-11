<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>주문 목록</title>
</head>
<body>
	
<center>
주문 목록
<?php
include "db.php";
$query = "select * from storeboard";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"
	<br><br><br>
	<table width = '800'>
	<td width = '70' align='center'>주문번호</td>  
	<td width = '80' align='center'>메뉴</td>  
	<td width = '50' align='center'>수량</td>
	<td width = '50' align='center'>가격</td>  
	<td width = '550' align='center'>주소</td>
	</table>";

while($row = mysqli_fetch_array($result)){
	echo"
	<table width = '800'>
	<td width = '70' align='center'>$row[guest_num]</td>
	<td width = '80' align='center'>$row[menu]</td>
	<td width = '50' align='center'>$row[sellc]</td>
	<td width = '50' align='center'>$row[sprice]</td>  
	<td width = '550' align='center'>$row[guest_add]</td>  
	</table>";
	
}
	mysqli_close($conn);
?>
<form>
	<input type='submit' value = '주문' formaction="Orderi.php" accept-charset="UTF-8"/>
	<input type='submit' value = '배송완료' formaction="Orderd.php" accept-charset="UTF-8"/>
	<br>
	<input  type='submit' value = '뒤로' formaction="index.html" accept-charset="UTF-8"/>
</form>
</center>
</body>
</html>
