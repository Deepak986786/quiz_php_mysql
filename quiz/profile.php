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
  <title>Online quiz</title>
  <link rel="logo" href="logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{background-image: url('295.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
     color: green;
  }
    li{padding-left: 40px;}
    th{color: blue;}
  </style>
</head>
<body>

      <!--Header section -->

      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- brand/logo-->

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
  
<div class="container">
 
    
       <h4>My Profile</h4>
   
        <table class="table">
          <thead>
             <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>mobile no:</th>
                <th>image</th>
             </tr>
          </thead>
          <tbody>
    
           <?php 
           foreach($profile->data as $prof)
           {?>
              <tr>
                <td><?php echo $prof['id'];?></td>
                 <td><?php echo $prof['name'];?></td>
                  <td><?php echo $prof['email'];?></td>
                  <td><?php echo $prof['no'];?></td>



                   <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="80px" height="100px" /></td>
                 </tr>
          </tbody>
         <?php  }?>
       </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>          
</body>
</html>
