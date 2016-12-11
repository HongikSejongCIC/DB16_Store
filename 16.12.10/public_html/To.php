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
$query = "select * from 식자재거래처 거, 식자재주문 주 where 거.등록번호 = 주.등록번호 ORDER BY 주문번호 ASC";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"
	<table width = '1200'>
	<td width = '200' align='center'>주문번호</td>  
	<td width = '200' align='center'>이름</td>  
	<td width = '200' align='center'>번호</td> 
	<td width = '200' align='center'>재료</td>
	<td width = '200' align='center'>개수</td>
	<td width = '200' align='center'>가격</td>
	</table>";

while($row = mysqli_fetch_array($result)){
	echo"
	<table width = '1200'>
	<td width = '200' align='center'>{$row['주문번호']}</td>
	<td width = '200' align='center'>{$row['이름']}</td>
	<td width = '200' align='center'>{$row['전화번호']}</td>
	<td width = '200' align='center'>{$row['식자재']}</td>  
	<td width = '200' align='center'>{$row['개수']}</td>
	<td width = '200' align='center'>{$row['가격']}</td> 
	</table>";
	
}
	mysqli_close($conn);
?>
<form>
	<center><input style="width: 100px" type='text' name = '주문번호' placeholder='주문번호'/><br>
	<input type='submit' value = '주문하기' formaction="Toi.php" accept-charset="UTF-8"/>
	<input type='submit' value = '배송완료' formaction="Tod.php" accept-charset="UTF-8" formmethod="get"/><br>
	<input  type='submit' value = '뒤로' formaction="main.html"/><br>
	<input type='submit' value = '거래처추가' formaction="acci.html" accept-charset="UTF-8"/>
	<input type='submit' value = '거래처삭제' formaction="Todelete.php" accept-charset="UTF-8"/>
</form>
</center>
</body>
</html>