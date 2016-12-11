<?
include "db.php";

$username = $_GET['name'];
$userid = $_GET['id'];
$userpw = $_GET['pw'];
$checkpw = $_GET['cpw'];

$query = "SELECT 사장ID FROM 사장 WHERE 사장ID = '{$_GET['id']}'";
$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
if (empty($_GET['name'])) {
	echo "이름을 다시 입력해주세요.";
	echo ("<meta http-equiv='Refresh' content='1; URL=signup.html'>");
	exit;
}
elseif (empty($_GET['id'])) {
	echo "ID를 다시 입력해주세요.";
	echo ("<meta http-equiv='Refresh' content='1; URL=signup.html'>");
	exit;
}
elseif($row['사장ID'] == $_GET['id']){
	echo "이미 존재하는 ID입니다.";
	echo ("<meta http-equiv='Refresh' content='1; URL=signup.html'>");
	exit;
}

elseif (empty($_GET['pw'])) {
	echo "패스워드를 다시 입력해주세요.";
	echo ("<meta http-equiv='Refresh' content='1; URL=signup.html'>");
	exit;
}
else{
	if ($_GET['비밀번호'] != $_GET['cpw']) {
		echo "비밀번호가 일치하지 않습니다.";
		echo ("<meta http-equiv='Refresh' content='1; URL=signup.html'>");
		exit;
	}
}

$query = "INSERT INTO 사장
(사장ID, 비밀번호, 사장이름) VALUES('$userid', '$userpw', '$username')";
$result = mysqli_query($conn, $query);

mysqli_close($conn);
echo "회원가입을 축하합니다.";
echo ("<meta http-equiv='Refresh' content='1; URL=index.html'>");
?>