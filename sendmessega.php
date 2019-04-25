<?php
error_reporting(0);
include_once 'header.php';
	if(!empty($_POST['messege']) && !empty($_COOKIE['nickname'])){
		$nickname = $_COOKIE['nickname'];
		$text = $_REQUEST['messege'];
		$bd1 = mysqli_connect(localhost, root,'',chat_bd);

		$sql1 = mysqli_query($bd1, "INSERT INTO messege(content,user_nickname,datesend) VALUES('".$text."','".$nickname."',NOW())");
		
			$sql = mysqli_query($bd1, "SELECT * FROM messege");
	
	while($res = mysqli_fetch_array($sql)){
		if($res['user_nickname'] == $_COOKIE['nickname']){
			
		echo '<div class="blockmessege1>
					<div class="row blockname1">
						<b><p>'.$res['user_nickname'].'</p></b>
					</div>
					<div class="row block">
						<p>'.$res['content'].'</p>
					</div>
					<div class="row block">
						<p>'.$res['datesend'].'</p>
					</div>
					
				</div>';
		}
		else{
			echo '<div class="blockmessege1">
					<div class="row block">
						<b><p>'.$res['user_nickname'].'</p></b>
					</div>
					<div class="row block">
						<p>'.$res['content'].'</p>
					</div>
					<div class="row blockdate">
						<p>'.$res['datesend'].'</p>
					</div>
					
				</div>';
		}
	}		
	}
	

	
	
	
	
	
   

?>