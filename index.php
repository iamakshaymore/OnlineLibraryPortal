<?php
session_start();
if(!empty($_SESSION['uname']&&!empty($_SESSION['pwd']))){

    include "connection.php";
    $uname=$_SESSION['uname'];
    $pass=$_SESSION['pwd'];
    $sql="SELECT uname,pwd FROM users WHERE uname='".$uname."';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) 
              {
                header("Location:./home.php");
                }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Library Portal - Project By Akshay More</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

body {
background: url(/bg.jpg) no-repeat center center fixed ; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
  
}

h2 {
  
    bottom: 70px;
 
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 2s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
animation-iteration-count: infinite;
}



/* Standard syntax */
@keyframes example {
    0%   {color: red;}
    25%  {color: white;}
    50%  {color: red;}
    100% {color: white;}
}
</style>
<BODY style="color:white">

<h1 style="text-align:center;"><br><b>Welcome To Online Library Portal</b></h1>
<h3 style="text-align:center;">(Use Username:user1 or user2 & Password:user1 or user2 For Taking A Tour Of The Website)</h3>
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
<div style="text-align:center;">
<form action="login.php" method="post">
 <div class="form-group">
      <label for="uname"><h3><b>Name</b></h3></label>
      <input type="text" class="form-control" name="uname">
    </div>
    <div class="form-group">
      <label for="pwd"><h3><b>Password</b></h3></label><br>
      <input type="password" class="form-control" name="pwd"><br>
    </div>
<input type="submit" value="&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;" button class="btn btn-success" name="login"></button>

  </form>
</div>
</div>
  <div class="col-sm-3"></div>


</body>
</html>