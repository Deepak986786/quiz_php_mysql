<?php
$conn=mysqli_connect('localhost','root','','quiz_oops');

extract($_POST);
$query="select username,password from adminlogin where username='$username' and password='$password'";

$result=mysqli_query($conn,$query);

$row=mysqli_num_rows($result);

if($row){
	header('location:admin.php');
}
else{
    header('location:index.php');
}
mysqli_close($conn)

?>