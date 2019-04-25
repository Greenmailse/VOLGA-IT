<?php
if (!empty($_COOKIE['nickname']))   
{   
  require('joinpage.php');
}
else{
	 require('initialization.php');
}