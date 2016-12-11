<?
include "db.php";
$code = $_GET['주문번호'];
if(empty($_GET['주문번호'])){
	echo "주문목록이 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=OrderW.php'>");
}
else{
$query = "SELECT * FROM 사용자";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
if(empty($row)){
	echo "주문목록이 없습니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=OrderW.php'>");
}else{
$sprice = $row['가격'];
$ssellc = $row['개수'];
$price =  $sprice * $ssellc;
$query = "DELETE FROM 사용자 WHERE 주문번호 = $code";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$query = "SELECT * FROM 가계부";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while($row = mysqli_fetch_array($result)){
	$num = $row['가계부번호'];
}
$num++;
$query = "INSERT INTO 가계부(판매량,가계부번호) VALUES ('$price','$num')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);
echo ("<meta http-equiv='Refresh' content='0; URL=OrderW.php'>");}}
?>