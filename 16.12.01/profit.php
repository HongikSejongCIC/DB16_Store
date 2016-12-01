<?
	include "db.php";
	$query = "select * from profit";
	$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
	$i=0;
	$num = 0;
	$code = 0;
	while($row = mysqli_fetch_array($result)){
		$profit[$i] = $row['sellprofit'];
		$code = $row['code'];
		$i++;
	}
	$i--;
	$code++;
	while($i>=0){
		$num = $num+$profit[$i];
		$i--;
	}
	$query = "INSERT INTO profit(allprofit,code) VALUES ('$num','$code')";
	$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
	mysqli_close($conn);
?>