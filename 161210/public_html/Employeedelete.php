<?
include "db.php";
$num = $_GET["emnum"];
if(!empty($num)){
	$query = "SELECT 사원번호 FROM 직원 WHERE 사원번호 = $num";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row['사원번호'] == $num){
		$query = "DELETE FROM 직원 WHERE 사원번호 = $num";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("삭제완료");
	}else{
	echo "없는 사원번호입니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=EmployeeW.php'>");}
	
}
else
	echo "삭제할 사원번호를 입력하세요";
echo ("<meta http-equiv='Refresh' content='1; URL=EmployeeW.php'>");

?>