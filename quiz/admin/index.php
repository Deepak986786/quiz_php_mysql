<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style type="text/css">body{background-color: silver;font-family: sans-serif;
  	background-image: url("9442_Sun_Rise1600_1200.jpg");
    background-size: cover;}
  .container{width: 500px;height: 400px;padding-right: 80px;padding-top: 40px;

  			color: white;

  }
  input{border-radius: 30px;}


  </style>

</head>
<body>
	<div class="container">
		<center><h2>Admin! Login here</h2></center><br><br>
	<form action="admin_signin.php" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<div class="row">
					<label class="col-sm-3">Username</label>
					<input type="text" name="username" required="" class="col-sm">
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-sm-3">Password</label>
					<input type="password" name="password" required="" class="col-sm">
				</div>
			</div>	<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Login" class=" btn btn-outline-light" id="btn">
	</form>
	
	</div>
</body>
</html>