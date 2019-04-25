<?php
require_once 'header.php';
if(!empty($_COOKIE['nickname'])){
	echo'<div class="online">
		<p>'.$_COOKIE['nickname'].'</p>
	</div>';
}