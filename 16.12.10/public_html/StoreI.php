<?php
	include "db.php";
	$query = "SELECT * FROM 매장";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$query = "DELETE FROM 매장 WHERE 매장등록코드 = {$row['매장등록코드']}";
	$result = mysqli_query($conn, $query);
	$query = "INSERT INTO 매장(매장등록코드,이름,번호) VALUES ('{$_GET['code']}','{$_GET['name']}','{$_GET['number']}')";
	$result = mysqli_query($conn, $query);
	$query = "UPDATE 가계부 set 임대료 = {$_GET['rental']}";
	$result = mysqli_query($conn, $query);
	echo ("<meta http-equiv='Refresh' content='1; URL=Store.php'>");
?>