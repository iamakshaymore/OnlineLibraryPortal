<?php
include "connection.php";
include "loggedin.php";
$lid=$_GET['lid'];
$sql = "UPDATE  loan SET  lstatus = 'Rejected' WHERE lid =$lid";
if ($conn->query($sql) === TRUE)
header('Location:./loan.php');
?>