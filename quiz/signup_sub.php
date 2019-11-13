<?php
include("class/users.php");
$register=new users;
extract($_POST);
$img=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img);
$query="insert into signup values ('','$n','$e','$no','$img','$pass')";
if($register->signup($query))
{
	$register->url("index.php?run=success");
}


?>