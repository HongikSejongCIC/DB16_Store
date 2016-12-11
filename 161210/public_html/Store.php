<?php
	include "db.php";
	$query = "SELECT 매장등록코드 FROM 매장";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_row($result);
	if(empty($row)){
		echo "등록 후 사용하셔야 합니다!";
		echo ("<meta http-equiv='Refresh' content='1; URL=StoreR.html'>");
	}
	else
		echo ("<meta http-equiv='Refresh' content='1; URL=Storew.php'>");
?>