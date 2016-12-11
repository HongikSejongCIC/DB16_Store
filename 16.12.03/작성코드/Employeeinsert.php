
	<?php
	include "db.php";
	
	$name = $_GET["emname"];
	$num = $_GET["emnum"];
	$rest = $_GET["emrest"];
	$money = $_GET["emmoney"];
	if(!empty($name)&&!empty($num)&&!empty($rest)&&!empty($money)&&is_numeric($num)){
		$query = "INSERT INTO employee(number,name,rest,money) VALUES('$num','$name','$rest','$money')";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		mysqli_close($conn);
		echo ("<meta http-equiv='Refresh' content='1; URL=EmployeeW.php'>");
		echo ("저장완료");
	}
	else if(empty($name)){
		echo "이름을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.php'>");
	}else if(empty($num)){
		echo "사원번호를 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.php'>");
	}else if(empty($rest)){
		echo "휴무일을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.php'>");
	}else if(empty($money)){
		echo "급여를 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.php'>");
	}else{
		echo "사원번호는 숫자만 가능합니다.";
		echo ("<meta http-equiv='Refresh' content='1; URL=Employeei.php'>");
	}
	
	?>