
	<?php
	include "db.php";
	
	$name = $_GET["emname"];
	$num = $_GET["emnum"];
	$rest = $_GET["emrest"];
	$money = $_GET["emmoney"];
	if(!empty($name)&&!empty($num)&&!empty($rest)&&!empty($money)&&is_numeric($num)){
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.html'>");
		$query = "INSERT INTO 직원(사원번호,이름,휴무일,월급) VALUES('$num','$name','$rest','$money')";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$query = "SELECT * FROM 가계부";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		$money = ($row['월급']+$money);
		
		echo ("<meta http-equiv='Refresh' content='1; URL=EmployeeW.php'>");
		echo ("저장완료");
	}
	else if(empty($name)){
		echo "이름을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.html'>");
	}else if(empty($num)){
		echo "사원번호를 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.html'>");
	}else if(empty($rest)){
		echo "휴무일을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.html'>");
	}else if(empty($money)){
		echo "급여를 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.html'>");
	}else{
		echo "사원번호는 숫자만 가능합니다.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.html'>");
	}mysqli_close($conn);?>