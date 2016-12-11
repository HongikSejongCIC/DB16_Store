<?
include "db.php";
$code = $_GET['주문번호'];
if(empty($_GET['주문번호'])){
	echo "주문목록이 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=To.php'>");
}else{
$query = "SELECT * FROM 식자재주문";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
if(empty($row)){
	echo "주문목록이 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=To.php'>");
}else{
$cost = $row['가격'];
$query = "DELETE FROM 식자재주문 WHERE 주문번호 = $code";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$query = "SELECT * FROM 가계부";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while($row = mysqli_fetch_array($result)){
	$num = $row['가계부번호'];
}
$num++;
$query = "INSERT INTO 가계부(총재료비,가계부번호) VALUES ('$cost','$num')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);
echo ("<meta http-equiv='Refresh' content='0; URL=To.php'>");}}
?>