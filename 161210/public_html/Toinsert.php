<?php
	include "db.php";
	error_reporting(~E_NOTICE);
	$num = $_GET['num'];
	$cost = $_GET['cost'];
	$query = "SELECT * FROM 식자재거래처";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($result)){
		$data = $row['가격'];
		$data = $data*$num;
		if($cost == $data){
			$scode = $row['등록번호'];
		}
	}
	$query = "SELECT * FROM 식자재주문";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$code=0;
	while($row = mysqli_fetch_array($result)){
		if($code<$row['주문번호'])
			$code = $row['주문번호'];
	}
	$code++;
if(!empty($cost)&&!empty($num)){
	$query = "INSERT INTO 식자재주문(주문번호,가격,개수,등록번호) VALUES('$code','$cost','$num','$scode')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("<meta http-equiv='Refresh' content='0.01; URL=To.php'>");
}
else{
	echo "공백은 입력할 수 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=Toi.php'>");
}
	?>