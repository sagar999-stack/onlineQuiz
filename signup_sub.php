<?php
include("class/users.php");
$register = new users;
extract($_POST);
$img_name=$_FILES ['image'] ['name'];
$tmp_name=$_FILES ['image'] ['tmp_name'];
move_uploaded_file($tmp_name, "img/".$img_name);
$query="insert into signup values ('','$name','$email','$pwd','$img_name')";
if($register->signup($query))
{
	$register->url("index.php?run=success");
}

?>