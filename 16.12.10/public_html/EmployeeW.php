<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>직원 목록</title>
</head>
<body>
	
<center>
<H3>직원 목록</H3>
<?php
include "db.php";
$query = "select * from 직원";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"
	<table width = '400'>
	<thread>
	<td width = '100' align='center'>이름</td>  
	<td width = '100' align='center'>사원번호</td>  
	<td width = '100' align='center'>휴무</td>  
	<td width = '100' align='center'>급여</td>
	</thread>
	</table>";

while($row = mysqli_fetch_array($result)){
	echo"
	<table width = '400'>
	<td width = '100' align='center'>$row[이름]</td>  
	<td width = '100' align='center'>$row[사원번호]</td>  
	<td width = '100' align='center'>$row[휴무일]</td>  
	<td width = '100' align='center'>$row[월급]</td>
	</table>";
	
}
	mysqli_close($conn);
?>
<form>
	<input type='submit' value = '추가' formaction="Employeei.html" accept-charset="UTF-8"/>
	<input type='submit' value = '삭제' formaction="Employeed.html" accept-charset="UTF-8"/>
	<br><br>
	<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="main.html" accept-charset="UTF-8"/>
</form>
</center>
</body>
</html>
