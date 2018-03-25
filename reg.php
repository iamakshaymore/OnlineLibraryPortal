<?php
include "connection.php";
include "loggedin.php";
$name=$_POST['name'];
$eid=$_POST['eid'];
$phno=$_POST['phno'];
$uname=$_SESSION["uname"];
$sql = "update users set name='".$name."',eid='".$eid."',phno='".$phno."' where uname='".$uname."'";

if ($conn->query($sql) === TRUE) {
header('Location:./home.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
WHERE CustomerID = 1;