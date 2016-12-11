<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>메뉴추가</title>
</head>
<?php
include "db.php";
	?>
		<form>
		<center>
			<h3>메뉴 추가</h3>
		<input type="text" name="메뉴" placeholder=" 메뉴" style="width:150px"/>
		<input type="text" name="가격" placeholder=" 가격" style="width:150px" /><br>
		<input formmethod="get" formaction="menuup.php" type="submit" value = "추가"/>
		<input style = "width:50; height:30;" type='submit' value = '뒤로' formaction="menu.php" accept-charset="UTF-8"/>
		</center>
		</form>
</body>
</html>