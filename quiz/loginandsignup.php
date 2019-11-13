<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body{ font-size: 17px;color: green;
		font-family: sans-serif;background-image: url('login.jpg');background-size:cover;}
		li{padding-left: 20px;}
</style>

</head>
<body>
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
            <a class="nav-link" href="contact.php">Contact me</a>
            </li>   
            </ul>
          </div>  
      </nav>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <div class="panel panel-success">
				  <div class="panel-heading"><h3>Hello users,Welcome!! </h3></div>
				  <div class="panel-body">to Online examination system</div>
			</div>
		</div>
    </div>
</div>




	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading"><h3>Login Form</h3></div>
						<div class="panel-body">
							<p style="color: blue;">Registered users login here</p>
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6">
							<div class="panel panel-info">
								
								<div class="panel-heading"><h3>Signup Form</h3></div>
							<div class="panel-body">
								<p style="color: blue;">New user signup here!</p>
							    <?php 
						        	if(isset($_GET['run'])&& $_GET['run']=="success")
					         		{
							        	echo "<mark>Your registration successfully done</mark>";
						        	} 
						    	?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required="">
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="text" class="form-control" name="e" id="email" placeholder="Enter email"  required="">
								</div>
								<div class="form-group">
								  <label for="email">Password:</label>
								  <input type="text" class="form-control" name="pass" id="password" placeholder="password"  required="">
								</div>
								<div class="form-group">
								  <label for="mob">Mobile no:</label>
								  <input type="text" class="form-control" name="no" id="mob" placeholder="Enter your contact number" required="">
								</div>
										
								<div class="form-group">
								  <label for="pwd">Upload your iamge</label>
								  <input type="file" class="form-control" name="img" required="" >
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
