<?php
error_reporting(0);
include_once 'header.php';
session_start();
if(isset($_POST['nickname'])){
	setcookie("nickname", $_POST['nickname'], time() + (60*30));
	$_SESSION[nickname] = $_POST['nickname'];
	$nickname = $_POST['nickname'];
	$bd = mysqli_connect(localhost, root,'',chat_bd);
	
	$sql = mysqli_query($bd, "INSERT INTO users(nickname) VALUES('$nickname') ");

		if(!$sql) {
			die('Неверный запрос: ' . mysql_error());
		}else{
			require('chat.php');
		}
}
?>
<?php
include_once 'footer.php';
?>

