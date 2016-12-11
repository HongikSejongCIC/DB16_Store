<?
	include "db.php";

	$query = "SELECT 비밀번호 FROM 사장 WHERE 사장ID = '{$_GET['id']}' and 비밀번호 = '{$_GET['pw']}'";
	 $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
	$row = mysqli_fetch_array($result) ;
	if(!empty($row) && ($row['비밀번호'] == $_GET['pw']))
	{
		setcookie("사장ID", $_GET['id'], time() + 3600, "/");	
		$query = "SELECT 사장이름 FROM 사장 WHERE 사장ID = '{$_GET['id']}'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		echo "안녕하세요. {$row['사장이름']}님<br>";
		echo ("<meta http-equiv='Refresh' content='1; URL=main.html'>");
	}
	
	else
	{
		
		echo "아이디 또는 비밀번호가 잘못 되었습니다.";
		echo ("<meta http-equiv='Refresh' content='1; URL=index.html'>");
		exit;
	}
	mysqli_close($conn);
;
	
?>