<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>직원 추가</title>
</head>

<body>
	<center>
	직원 추가<br><br>
		<form method="get" action="Employeeinsert.php" accept-charset="UTF-8">
		<input type="text" name="emname" placeholder=" 이름"/>
		<input type="text" name="emnum" placeholder=" 사원번호"/>
		<input type="date" name="emrest" value=date("Y-m-d")/>
		<input type="int" name="emmoney" placeholder=" 월급"/>
		<input type="submit" value = "추가"/>
		<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="EmployeeW.php" accept-charset="UTF-8"/>
		</center>
		</form>
</body>
</html>
