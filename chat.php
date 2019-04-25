<?php
include_once 'header.php';
error_reporting(0);
?>
       <script>  
        $(document).ready(function(){  
          
            $('#myForm').submit(function(){  
                $.ajax({  
                    type: "POST",  
                    url: "sendmessega.php",  
                    data: "messege="+$("#messege").val(),  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                });  
                return false;  
            });  
              
        });  
    </script>  
	<script>  
        function show()  
        {  
            $.ajax({  
                url: "updateusers.php",  
                cache: false,  
                success: function(html){  
                    $("#update_chat").html(html);  
                }  
            });  
        }  
      
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        });  
    </script> 
    
<div class="pagecontent">
	<div class="row chatform">
		<div class="col-md-9 chat" id="content"></div>
		<div class="col-md-3 users" id="update_chat">
			
		</div>	
		<div class="col-md-12 messege">
			<form  id="myForm" class="form-horizontal" method="POST" action=">
			  <div class="form-group">
			  <?php 
			  if(!empty($_SESSION['nickname'])){
				  	echo '<label for="messege" class="col-sm-2 control-label">'.$_SESSION['nickname'].'</label>';
			  }
			  elseif(!empty($_COOKIE['nickname'])){
				  echo '<label for="messege" class="col-sm-2 control-label"><b>'.$_COOKIE['nickname'].'</b></label>';
			  }
				?>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="messege" name="messege" placeholder="Сообщение">
				</div>
			  </div>			
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-9">
				  <button type="submit" class="btn btn-success">Отправить</button>
				</div>
			  </div>
		
		</div>
	</div>
</div>
 

<?php
include_once 'footer.php';
?>

