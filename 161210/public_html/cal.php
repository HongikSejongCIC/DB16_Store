<?
include "db.php";

$query = "SELECT * FROM 가계부";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
if($row['가계부번호']==0){
$allp =$row['판매량']-($row['임대료']+$row['월급']+$row['총재료비']);}
$query = "UPDATE 가계부 SET 총수익 = {$allp}";
$result = mysqli_query($conn,$query);

?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>수입 상세 정보</title>
</head>

<body>
<form>
	<center>
		<h3>수입 상세 정보</h3>
		<table width="500">
			<tr>
				<?
				echo"
				<td align='center'>총수입</td>  
				<td align='center'>매출</td>  
				<td align='center'>임대료</td>  
				<td align='center'>재료비</td>  
				<td align='center'>월급 총합</td>";
				?>
			</tr>
			<tr>
				<?
				$query = "select * from 가계부";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result)){
				echo"
				<td align='center'>$row[총수익]</td>  
				<td align='center'>$row[판매량]</td>  
				<td align='center'>$row[임대료]</td>
				<td align='center'>$row[총재료비]</td>
				<td align='center'>$row[월급]</td>";}
				mysqli_close($conn);?>
				
			</tr>
		</table>
		<input type="submit" value="뒤로" formaction="Storew.php"/>
	</center>
	</form>
</body>
</html>
