<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>주문서</title>
</head>
<?php
include "db.php";
$query = "select * from menu";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$number = 1;
while($row = mysqli_fetch_array($result)){
	$menu[$number] = $row['fmenu'];
	$price[$number] = $row['price'];
	$number++;
}
	$menu[0] = "메뉴 선택";
	$price[0] = 0;
	mysqli_close($conn);
?>
<body>
	<center>
	주문 추가<br><br>
	</center>
		<form method="get" action="Orderinsert.php" accept-charset="UTF-8">
		<center>
		<select name="gumenu" id="menus" onChange="re(this.value)">
    		<? for( $i=0; $i<$number; $i++ ){
      	 		if($i == 0)  {?>
      	 			<option value="<?=$price[$i]?>"><?=$menu[$i]?></option> <?}?>
				<? if($i!=0){ ?>
					<option value="<?=$price[$i]?>"><?=$menu[$i]?> + <?=$price[$i]?></option><?}?>
    		<?	} ?>
		</select>
		<script>
			function re(){
			var SV = document.getElementById('menus').value;
			var NB = document.getElementById('number').value;
				document.getElementById("price").value=SV*NB;
			}
		</script>
		<div id = "mon"></div>
		<input id="number" type="text" name="sellc" placeholder=" 개수"/>
		<input id="price" type="text" name="guprice" placeholder=" 가격"/>
		<input type="text" name="guadd" placeholder=" 주소" style="width:700px" />
		<input type="submit" value = "추가"/>
		<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="OrderW.php" accept-charset="UTF-8"/>
		</center>
		</form>
</body>
</html>