
	<?php
	include "db.php";
	
	$guprice = $_GET["guprice"];
	$guadd = $_GET["guadd"];
	$gusellc = $_GET["sellc"];
	$query = "SELECT * FROM 메뉴";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($result)){
		$data =  $row['가격'];
		$data = $data*$gusellc;
		if($guprice == $data){
			$gumenu = $row['메뉴'];
		}
	}
	$query = "SELECT * FROM 사용자";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$num=0;
	while($row = mysqli_fetch_array($result)){
		$num = $row['주문번호'];
	}
	$num++;
if(!empty($gumenu)&&!empty($guadd)){
	$query = "INSERT INTO 사용자(메뉴,개수,주문번호,주소,가격) VALUES('$gumenu','$gusellc','$num','$guadd','$guprice')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("<meta http-equiv='Refresh' content='0.01; URL=OrderW.php'>");
}
else{
	echo "공백은 입력할 수 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=Orderi.php'>");
}
	?>