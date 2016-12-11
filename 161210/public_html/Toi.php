<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>주문서</title>
</head>
<script>
			function ree(){
			var SV = document.getElementById('moment').value;
			var NB = document.getElementById('num').value;
				document.getElementById("cost").value=SV*NB;
			}
	</script>
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
		<H2>주문 추가</H2>
	</center>
	<center>
		<select size='10' multiple name="moment" id="moment">
			<? for( $i=1; $i<$number; $i++ ){?>
					<option value="<?=$cost[$i]?>"><?=$moment[$i]?></option>
    		<?	} ?>
			<option>---------------------------</option>
		</select>
	</center>
	
	<center>
	<form>
		<input type="text" placeholder="개수" name="num" id="num">
		<input type="text" placeholder="가격" name="cost" id="cost">
		<input type="button" onClick='ree()' value="계산"/><br>
		<input formmethod="get" formaction="Toinsert.php" type="submit" value = "추가"/>
		<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="To.php" accept-charset="UTF-8"/>
		</center>
		
		</form>
</body>
</html>
