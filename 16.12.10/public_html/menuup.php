
	<?php
	include "db.php";
	$query = "SELECT 메뉴 FROM 메뉴";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while($row = mysqli_fetch_array($result)){
		if($_GET['메뉴'] == $row['메뉴']){
			echo "같은메뉴는 입력할수없습니다.";
			echo ("<meta http-equiv='Refresh' content='0.01; URL=menu.php'>");
		}
	}
if(!empty($_GET['메뉴'])&&!empty($_GET['가격'])){
	$query = "INSERT INTO 메뉴(메뉴,가격) VALUES('{$_GET['메뉴']}','{$_GET['가격']}')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("<meta http-equiv='Refresh' content='0.01; URL=menu.php'>");
}
else{
	echo "공백은 입력할 수 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=menuinsert.php'>");
}
	?>