<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  body{background-image: url('aboutme.jpg');background-size: cover;color: orange;}
</style>


</head>
<body>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2>Your Quiz results</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="bg-success">Total number of Questions</th>
        <th class="bg-success"><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td class="bg-danger">Wrong answer</td>
        <td class="bg-danger"><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-2"></div>
</div>
	
	
	
	
	<footer style="font-family: sans-serif;color:black; margin-bottom: 0px;"><center>&copy;All rights are reserved by <b>Deepak</b></center></footer>
	
	
	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>