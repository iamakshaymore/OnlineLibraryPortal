<?php
include "connection.php";
include "loggedin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
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
echo "Admin!";
?>

</div></div>
<div class="col-md-6"></div>
<div class="col-md-3"><div style="text-align:right;font-size: 20px;"><br><a href="/logout.php"><button type="button" class="btn btn-default">Logout</button></a>
</div>
</div>
</div>
</div><br><br><br>
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked">

        <li class="active"><a href="./managebooks.php">Manage Books</a></li>
        <li><a href="./studentrecord.php">Student Record</a></li>
  
      </ul>
    </div>
<div class="col-md-1"></div>
<div class="col-md-7">
<div style="text-align:left; color:white;">
<a href="./add.php"><button type="button" class="btn btn-primary">Add Book</button></a>
</div>
<table class="table"style="width:100">
<br><tr>
<th><i><u>Book Id</u></i></th>
<th><i><u>Name</u></i></th>
<th><i><u>Author</u></i></th>
<th><i><u>Department</u></i></th>
<th><i><u>Availability</u></i></th>
<th><i><u></u></i></th>
</tr>

<?php
$sql = "SELECT * FROM Library ORDER BY bid ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>".$row["bid"]. "</th><th>".$row["bname"]."</th><th>".$row["bauth"]. "</th><th>".$row["department"]. "</th><th>".$row["availability"]. "</th><th>".$row["bava"]."<th><a href='./availabilitybooks.php?bid=".$row["bid"]."'>Update</a>&nbsp;<a href='./delete.php?bid=".$row["bid"]."'>Delete</a></th></tr></th>";


}}




$conn->close();
?>
</table>




</div>
</div>
<div class="col-md-1"></div>

</body>
</html>