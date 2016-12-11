<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>매장 등록</title>
</head>
<?
	include "db.php";
	$query = "SELECT * FROM 매장";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	?>
<body>
	<center>
		<H3>매장 수정</H3>
		<form>
		<input style="width: 200px;" type="text" name="code" placeholder="<?=$row['매장등록코드']?>"/><br>
		<input style="width: 200px;" type="text" name="name" placeholder="<?=$row['이름']?>"/><br>
		<input style="width: 200px;" type="text" name="number" placeholder="<?=$row['번호']?>"/><br>
			<?
				$query = "SELECT * FROM 가계부";
			   	$result = mysqli_query($conn,$query);
			   	$row = mysqli_fetch_array($result);
				?>
		<input style="width: 200px;" type="text" name="rental" placeholder="<?=$row['임대료']?>"/><br>
		<input style="width: 100px;" input type="submit" value="Back" formaction="Storew.php" /> 
		<input style="width: 100px;" input type="submit" value="Regist" formmethod="get" formaction="StoreI.php" />
		</form>
	</center>
</body>
</html>
