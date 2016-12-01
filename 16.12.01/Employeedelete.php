<?
include "db.php";
$num = $_GET["emnum"];
if(!empty($num)){
	$query = "DELETE FROM employee WHERE number = $num";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("저장완료");
}
else
	echo "삭제할 사원번호를 입력하세요";
echo ("<meta http-equiv='Refresh' content='1; URL=EmployeeW.php'>");

?>