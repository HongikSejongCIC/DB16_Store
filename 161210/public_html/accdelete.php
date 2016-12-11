<?
include "db.php";
if(!empty($_GET['code'])){
	$num = $_GET['code'];
	$query = "SELECT 등록번호 FROM 식자재거래처 WHERE 등록번호 = $num";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row['등록번호'] == $num){
		$query = "DELETE FROM 식자재거래처 WHERE 등록번호 = $num";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_close($conn);
	echo ("삭제완료");
	}else{
	echo "없는 거래처입니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=Todelete.php'>");}
	
}
else
	echo "삭제할 거래처를 클릭하세요";
echo ("<meta http-equiv='Refresh' content='1; URL=Todelete.php'>");

?>