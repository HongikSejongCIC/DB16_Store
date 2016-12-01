<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>직원목록</title>
</head>
<body>
	
<center>
직원 목록
<?php
include "db.php";
$query = "select * from employee";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"
	<br><br><br>
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
	<td width = '100' align='center'>$row[name]</td>  
	<td width = '100' align='center'>$row[number]</td>  
	<td width = '100' align='center'>$row[rest]</td>  
	<td width = '100' align='center'>$row[money]</td>
	</table>";
	
}
	mysqli_close($conn);
?>
<form>
	<input "background-color:#ffffff; border:0; color:#7f3797; width:300; height:40; font-family: Helvetica" type='submit' value = '추가' formaction="Employeei.php" accept-charset="UTF-8"/>
	<input style = "width:50; height:30;" type='submit' value = '삭제' formaction="Employeed.php" accept-charset="UTF-8"/>
	<br><br>
	<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="index.html" accept-charset="UTF-8"/>
</form>
</center>
</body>
</html>
