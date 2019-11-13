<?php
include("class/users.php");
$qus=new  users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;
/* echo"<pre>";
print_r($qus->qus); */
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function timeout()
	{
		var hours=Math.floor(timeLeft/3600);
		var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var mint=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
	<style type="text/css">
		body{
			font-size: 12px;font-family: sans-serif;background-image: url('aboutme.jpg');
background-size: cover;		
}
li{ font-size: 15px;padding-left: 35px; }
	</style>

  
</head>
<body onload="timeout()" >
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#" style="font-size: 30px;"><img src="brandlogo.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class=" nav navbar-nav navbar-right">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
           
            <li class="nav-item">
            <a class="nav-link" href="loginandsignup.php">LoginAndSignup</a>
            </li> 
            <li class="nav-item">
            <a class="nav-link" href="aboutme.php">About the Developer</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact me</a>
            </li>   
            </ul>
          </div>  
      </nav>

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		  <h2>Onilne quiz in php</h2> 
		  <script type="text/javascript">
		  var timeLeft=1*60*60;<!--times of quiz-->
		  
		  </script>
		  
		  <div id="time"style="float:right">timeout</div></h2>
		<?php
		$i=1;
		foreach($qus->qus as $qust) {?> 
		<form method="post" id="form1" action="answer.php">
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><?php echo $i;?>  <?php echo $qust['question'];?>  </th>
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1'];?> </td>
			  </tr>
			<?php }?>
			<?php if(isset($qust['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4'];?></td>
			  </tr>
			  <?php }?>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
			  </tr>
			</tbody>
			
		  </table>
		<?php $i++;}?>
	<center><input type="submit" value="submit Quiz" class="btn btn-success" /></center>
</form>	
		</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>
