<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>주문 목록</title>
</head>
<body>
	
<center>
<H3>주문 목록</H3>
<?php
include "db.php";
$query = "select * from 사용자";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"
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
	<td width = '70' align='center'>$row[주문번호]</td>
	<td width = '80' align='center'>$row[메뉴]</td>
	<td width = '50' align='center'>$row[개수]</td>
	<td width = '50' align='center'>$row[가격]</td>  
	<td width = '550' align='center'>$row[주소]</td>  
	</table>";
	
}
	mysqli_close($conn);
?>
<form>
	<input style="width: 100px" type='text' name = '주문번호' placeholder="배달된 주문번호" formmethod="get" formaction="Orderi.php" accept-charset="UTF-8"/><br>
	<input type='submit' value = '주문' formaction="Orderi.php" accept-charset="UTF-8"/>
	<input type='submit' value = '배송완료' formaction="Orderd.php" accept-charset="UTF-8"/><br>
	<input  type='submit' value = '뒤로' formaction="main.html" accept-charset="UTF-8"/>
</form>
</center>
</body>
</html>
