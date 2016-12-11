
	<?php
	include "db.php";
	$code = $_GET["code"];
	$name = $_GET["name"];
	$num = $_GET["num"];
	$moment = $_GET["moment"];
	$cost = $_GET["cost"];
	if(!empty($name)&&!empty($num)&&!empty($moment)&&!empty($cost)){
		$query = "INSERT INTO 식자재거래처(등록번호,전화번호,이름,식자재,가격) VALUES('$code','$num','$name','$moment','$cost')";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		mysqli_close($conn);
		echo ("<meta http-equiv='Refresh' content='0.01; URL=To.php'>");
	}
	else if(empty($code)){
		echo "코드을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=acci.html'>");
	}
	else if(empty($name)){
		echo "이름을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=acci.html'>");
	}else if(empty($num)){
		echo "번호를 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=acci.html'>");
	}else if(empty($moment)){
		echo "물품을 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=acci.html'>");
	}else if(empty($cost)){
		echo "가격를 확인해주세요.";
		echo ("<meta http-equiv='Refresh' content='1; URL=acci.html'>");
	}
	
	?>