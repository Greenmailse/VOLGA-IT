<?php
error_reporting(0);
include_once 'header.php';
$sql = mysqli_query("SELECT id FROM chats WHERE id = 1");
$resul = mysqli_fetch_array($sql);
echo '
<div class="createform" action="<chat.php&row=$resul['id']">
	<form class="form-horizontal" method="" action="chat.php"> ';
	?>
	  <div class="form-group">
		<label for="inputnicname" class="col-sm-3 control-label"><h4><br><?php echo $_COOKIE['nickname']; ?></br></h4></label>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success">Присоедениться</button>
		</div>
	  </div>
	</form>
</div>

<?php
include_once 'footer.php';
?>
