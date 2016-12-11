<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>거래처 삭제</title>
</head>
<?php
include "db.php";
$query = "select * from 식자재거래처";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$number = 1;
$this;
while($row = mysqli_fetch_array($result)){
	$anumber[$number] = $row['전화번호'];
	$name[$number] = $row['이름'];
	$moment[$number] = $row['식자재'];
	$cost[$number] = $row['가격'];
	$code[$number] = $row['등록번호'];
	$number++;
}
?>
<body>
	<center>
		<H2>거래처 삭제</H2>
	</center>
	<form>
	<center>
		<select size='10' multiple name="code">
			<? for( $i=1; $i<$number; $i++ ){?>
					<option value="<?=$code[$i]?>"><?=$name[$i]?></option>
    		<?	} ?>
			<option>---------------------------</option>
		</select>
	</center>
	
	<center>
	
		<input type="submit" formmethod="get" value="삭제" formaction="accdelete.php" accept-charset="UTF-8"/><br>
		<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="To.php" accept-charset="UTF-8"/>
		</center>
		
		</form>
</body>
</html>
