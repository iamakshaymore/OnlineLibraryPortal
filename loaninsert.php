<?php
include "connection.php";
include "loggedin.php";
$lufrom=$_SESSION["uname"];
$luto=$_SESSION["luto"];
$lamt=$_POST['lamt'];
$sql = "INSERT INTO loan (lid,lufrom,luto,lamt,ldate,lstatus)VALUES(NULL,'$lufrom','$luto', $lamt,NOW(),'Not Approved')";
if ($conn->query($sql) == TRUE)
header('Location: ./loan.php');
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>