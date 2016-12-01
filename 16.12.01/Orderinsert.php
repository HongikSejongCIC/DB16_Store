
	<?php
	include "db.php";
	
	$guprice = $_GET["guprice"];
	$guadd = $_GET["guadd"];
	$gusellc = $_GET["sellc"];
	$query = "SELECT * FROM menu";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($result)){
		$data =  $row['price'];
		$data = $data*$gusellc;
		if($guprice == $data){
			$gumenu = $row['fmenu'];
		}
	}
	$query = "SELECT guest_num FROM storeboard";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$num=0;
	while($row = mysqli_fetch_array($result)){
		$num = $row['guest_num'];
	}
	$num++;
if(!empty($gumenu)&&!empty($guadd)){
	$query = "INSERT INTO storeboard(menu,sellc,guest_num,guest_add,sprice) VALUES('$gumenu','$gusellc','$num','$guadd','$guprice')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("<meta http-equiv='Refresh' content='1; URL=OrderW.php'>");
	echo ("저장완료");
}
else{
	echo "공백은 입력할 수 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=Orderi.php'>");
}
	?>