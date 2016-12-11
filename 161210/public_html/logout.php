<?
$valid_logout = false;
error_reporting(~E_NOTICE);
if (isset($_COOKIE['userid'])) {
	setcookie("userid", $_GET['userid'], time() - 3600, "/");
	$valid_logout = true;
}
else {
	$valid_logout = false;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>로그아웃</title>
	</head>
	<body>
		<table  witdh='100%' height='100%' valign='center' align='center'>
			<center>
				<b>
			<? if (!$valid_logout) { ?>
				로그인이 되지않은 상태입니다. 로그인 화면으로 돌아갑니다.
			<?echo ("<meta http-equiv='Refresh' content='1; URL=index.html'>");?>
			<? } else {?>
				로그아웃되었습니다.
			<?echo ("<meta http-equiv='Refresh' content='1; URL=index.html'>");?>
			<? } ?>
			</center>
			</table>
	</body>
</html>