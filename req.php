<?php
include "connection.php";
include "loggedin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Request Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
div.header{
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 80px;
    padding-left: 10px;
}
</style>
<BODY>
<div class="header" style="background-color:#286090;">
<div class="col-md-12">
<div class="col-md-3"><div style="text-align:justify;font-size: 35px;color:#f5f5f5 ;">Library Portal<br></div><div style="text-align:justify;font-size: 20px;color:#f5f5f5 ;">Hello
<?php

echo $_SESSION["name"]."!";
?></div></div>
<div class="col-md-6"></div>
<div class="col-md-3"><div style="text-align:right;font-size: 20px;"><br><a href="/logout.php"><button type="button" class="btn btn-default">Logout</button></a>
</div>
</div>
</div>
</div><br><br><br>
 <div class="col-md-3">
           <ul class="nav nav-pills nav-stacked">
       <li><a href="./home.php">My Account</a></li>
        <li><a href="./librarynew.php">Book Catalog</a></li>
        <li><a href="./cart.php">Cart</a></li>
        <li><a href="./loan.php">Loan</a></li>
        <li><a href="./about.php">About</a></li><br><br>
      </ul>
    </div>

<div class="col-md-8">


<?php
$bid=$_GET['bid'];
$uname=$_SESSION["uname"];
$sql = "SELECT name,bname,eid,phno,doi FROM orders Where bid=$bid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


echo "<table class=table style=width:100>
<tr>
<th><i><u>Issuer</u></i></th>
<th><i><u>Book Name</u></i></th>
<th><i><u>Email Id</u></i></th>
<th><i><u>Phone Number</u></i></th>
<th><i><u>Date Of Issue</u></i></th>
</tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["name"]. "</th><th>".$row["bname"]. "</th><th>".$row["eid"]. "</th><th>".$row["phno"]."</th><th>".$row["doi"]."</th></tr>";
    }
} else {
    echo "No book issued yet!";
}
?>

</table>
</div>
<div class="col-md-1"></div>

</body>
</html>