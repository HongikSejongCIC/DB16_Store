<?
	include "db.php";
	$query = "select * from 가계부";
	$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
	$i=0;
	$num = 0;
	$code = 0;
	while($row = mysqli_fetch_array($result)){
		$profit[$i] = $row['판매량'];
		$code = $row['가계부번호'];
		$i++;
	}
	$i--;
	$code++;
	while($i>=0){
		$num = $num+$profit[$i];
		$i--;
	}
	$query = "INSERT INTO 가계부(총수익,가계부번호) VALUES ('$num','$code')";
	$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
	mysqli_close($conn);
?>