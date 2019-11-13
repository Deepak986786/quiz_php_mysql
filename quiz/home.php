  <?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>

<!DOCTYPE html>
 <html lang="en">
<head>
  <title>Online Quiz</title>
  <link rel="logo" href="logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{font-size: 18px;
      background-image: url('home.jpg');
      background-size:cover;
      background-repeat: no-repeat;}
    li{padding-left: 40px;}
    
  </style>
</head>
<body>
      <!--Header section -->

      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <a class="navbar-brand" href="#" style="font-size: 30px;"><img src="brandlogo.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
            </li>    
            </ul>
          </div>  
      </nav>

<!--body of home-->
  <center><h3>Welcome to online quiz system</h3></center>
                                                        
 
                                                       
     <div class="dropdown">
            <center><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Start Quiz
            </button>
        <div class="dropdown-menu">
         
                <form  method="post" action="qus_show.php">
                   <select class="form-control" id="" name="cat">
                     <option>select category</option>

                    <?php     
                    foreach($profile->cat as $category)
                    { ?>              
                      <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
                          <?php   }?>
                    </select><br>

                   <center><input type="submit" value="submit" class="btn btn-primary" /></center>
                 </form>

        </div>
      </div>

      <footer style="font-family: sans-serif;color: white; margin-bottom: 0px;"><center>&copy;All rights are reserved by <b>Deepak</b></center></footer>
      

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>          
</body>
</html>
