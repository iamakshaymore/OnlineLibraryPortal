<?php
include "connection.php";
include "loggedin.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library portal</title>
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

?>


</div></div>
<div class="col-md-6"></div>
<div class="col-md-3"><div style="text-align:right;font-size: 20px;"><br><a href="./logout.php"><button type="button" class="btn btn-default">Logout</button></a>
</div>
</div>
</div>
</div><br><br><br>
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked">
      
        <li><a href="./managebooks.php">Manage Books</a></li>
        <li  class="active"><a href="./studentrecord.php">Student Record</a></li>
       <br><br>
      </ul>
    </div>
<div class="col-md-1"></div>
<div class="col-md-7">







<table class="table"style="width:100">




<?php
$uname=$_SESSION["uname"];
$sql = "SELECT order_id,name,bid,bname,doi,dateOfReturn FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<h2>ORDER HISTORY:</h2><table class=table style=width:100>
<tr>
<th><i><u>Student Name</u></i></th>
<th><i><u>Book Id</u></i></th>
<th><i><u>Book Name</u></i></th>
<th><i><u>Date Of Issue</u></i></th>
<th><i><u>Date Of Return</u></i></th>
</tr>";
    while($row = $result->fetch_assoc()) {

      /* echo date("Y-m-d"); */
  
    if(strtotime($row["dateOfReturn"]) > strtotime(date("Y-m-d"))){
        echo "<tr><td>".$row["name"]."</td><td>".$row['bid']."</td><td>".$row["bname"]."</td><td>".$row["doi"]."</td><td>".$row["dateOfReturn"]."</td><td><a href=./bookrec.php?order_id=".$row['order_id'].">Book Received</a><td></tr>";
    }else{

        echo "<tr  style='background-color:red'><td>".$row["name"]."</td><td>".$row["bid"]."</td><td>".$row["bname"]."</td><td>".$row["doi"]."</td><td>".$row["dateOfReturn"]."</td></tr>";
    }
  }
} else 
    echo "No Book(s) Issued yet!";
$conn->close();
?>

</table>


</div>
<div class="col-md-1"></div>


</body>
</html>