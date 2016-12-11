<!doctype html>
<?
	include "db.php";
				$query = "select * from 직원";
				$result = mysqli_query($conn,$query);
				$mon = 0;
				while($row = mysqli_fetch_array($result)){
					$mon = $row['월급']+$mon;
				}
				$query = "select * from 가계부";
				$result = mysqli_query($conn,$query);
				$number=0;$allp=0;$sell=0;$ren=0;$allc=0;
				while($row = mysqli_fetch_array($result)){
					$allp=$row['총수익']+$allp;
					$sell=$row['판매량']+$sell;
					$ren=$row['임대료']+$ren;
					$allc=$row['총재료비']+$allc;
					$code[$number]=$row['가계부번호'];
					$number++;
				}
				for($i=0; $i<$number; $i++){
					$query = "DELETE from 가계부 where 가계부번호 = $code[$i]";
					$result = mysqli_query($conn,$query);
				}			
				$query = "INSERT INTO 가계부(총수익,판매량,임대료,총재료비,월급,가계부번호) VALUES ('$allp','$sell','$ren','$allc','$mon',0)";
				$result = mysqli_query($conn, $query);
				?>
<html>
<head>
<meta charset="utf-8">
<title>매장</title>
</head>

<body>
	<center>
	<H2> 매장 정보</H2>
		<form>
		<table width="1200">
			<tr>
				<td align="center" width="200"><H3></H3></td>
				<td align="center" width="200"><a href="cal.php"><H3>수입</H3></a></td>
				<td align="center" width="200"><H3></H3></td>
				<td align="center" width="200"><H3></H3></td>
				<td align="center" width="200"><H3>식자재</H3></td>
				<td align="center" width="200"><H3></H3></td>
			</tr>
			<tr>
				<?
				echo"
				
				<td align='center'>총수입</td>  
				<td align='center'>매출</td>  
				<td align='center'>임대료</td>  

				<td align='center'>재료</td>  
				<td align='center'>개수</td>  
				<td align='center'>비용</td>";
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
				<td align='center'>$row[임대료]</td>";}?>
				<?
				$query = "select * from 식자재거래처 거, 식자재주문 주 where 거.등록번호 = 주.등록번호";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result)){
				echo"
				<td align='center'>$row[식자재]</td>  
				<td align='center'>$row[개수]</td>  
				<td align='center'>$row[가격]</td>";
				?>
				<tr></tr><td></td><td></td><td></td><?}?>
			</tr>
			<tr>
				<td align="center" width="200"><H3></H3></td>
				<td align="center" width="200"><H3>매장 상세 정보</H3></td>
				<td align="center" width="200"><H3></H3></td>
				<td align="center" width="200"><H3></H3></td>
				<td align="center" width="200"><H3>직원</H3></td>
				<td align="center" width="200"><H3></H3></td>
			</tr>
			<tr>
				<?
				echo"
				<td align='center'>이름</td>  
				<td align='center'>번호</td>  
				<td align='center'>코드</td>
				<td align='center'>이름</td>  
				<td align='center'>휴무</td>  
				<td align='center'>월급</td>";
				?>
			</tr>
			<tr>
			<?	$query = "select * from 매장";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result)){
				echo"
				<td align='center'>$row[이름]</td>  
				<td align='center'>$row[번호]</td>
				<td align='center'>$row[매장등록코드]</td> "
				;}?>
				<?$query = "select * from 직원";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result)){
				echo"
				<td align='center'>$row[이름]</td>  
				<td align='center'>$row[휴무일]</td>  
				<td align='center'>$row[월급]</td>"
				;?>
				<tr></tr><td></td><td></td><td></td><?}?>
			</tr>
			
		</table>
		<input formaction="menu.php" type="submit" value="메뉴판" style="width:100px; height:30px;"/><br>
		<input formaction="StoreRE.php" type="submit" value="매장 정보 수정" style="width:100px; height:30px;"/><br>
		<input formaction="main.html" type="submit" value="뒤로" style="width:100px; height:30px;"/>
		</form>
	</center>
</body>
</html>