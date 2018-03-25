<?php

include "connection.php";
include "loggedin.php";
$bid = $_POST['bid'];
$bname = $_POST['bname'];
$bauth = $_POST['bauth'];
$department = $_POST['department'];
$availability = $_POST['availability'];

$sql = "INSERT INTO Library (bid,bname,bauth,department,availability)VALUES($bid, '$bname', '$bauth', '$department', $availability)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>