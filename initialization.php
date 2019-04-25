<?php
include_once 'header.php';
error_reporting(0);
?>
<div class="createform">
	<form class="form-horizontal" method="POST" action="joinchat.php"> 
	  <div class="form-group">
		<label for="inputnicname" class="col-sm-3 control-label">Имя пользователя</label>
		<div class="col-sm-3">
		  <input type="text" class="form-control" name="nickname" placeholder="Имя пользователя">
		</div>
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



