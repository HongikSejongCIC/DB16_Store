<?
include "db.php";
if(empty($_GET['이름'])){
	echo "없는메뉴 입니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=menu.php'>");
}else{
$query = "DELETE FROM 메뉴 WHERE 메뉴 = '{$_GET['이름']}'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
echo ("<meta http-equiv='Refresh' content='1; URL=menu.php'>");}
?>