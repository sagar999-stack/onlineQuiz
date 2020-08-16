<?php
include("class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($email,$pwd))
{
	header('Location: http://localhost/quiz_game/profile.php');
	
}
else
{
	
	$signin->url("index.php?run=failed");
	header('Location: http://localhost/quiz_game/index.php?run=failed');
}

?>