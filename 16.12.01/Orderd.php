<?
include "db.php";
$query = "SELECT * FROM storeboard";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$sprice = $row['sprice'];
$ssellc = $row['sellc'];
$price =  $sprice * $ssellc;
$num = $row['guest_num'];
$query = "DELETE FROM storeboard WHERE guest_num = $num";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$query = "SELECT * FROM profit";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while($row = mysqli_fetch_array($result)){
	$num = $row['code'];
}
$num++;
$query = "INSERT INTO profit(sellprofit,code) VALUES ('$price','$num')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);
echo ("<meta http-equiv='Refresh' content='10; URL=OrderW.php'>");
?>