<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Login(Admin)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

body {
background: url(./nyit.jpg) no-repeat center center fixed ; 
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

<h1 style="text-align:center;"><br><b>Welcome To Online Library Portal (Admin Pannel)</b></h1>
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
<div style="text-align:center;">
<form action="./login.php" method="post">
 <div class="form-group">
      <label for="uname"><h3><b>Name</b></h3></label>
      <input type="text" class="form-control" name="uname">
    </div>
    <div class="form-group">
      <label for="pwd"><h3><b>Password</b></h3></label><br>
      <input type="password" class="form-control" name="pwd"><br>
    </div>
<input type="submit" value="&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;" button type="button" class="btn btn-success"></button>

  </form>

</div>
</div>
  <div class="col-sm-3"></div>


</body>
</html>