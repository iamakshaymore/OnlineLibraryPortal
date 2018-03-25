<?php
include "connection.php";
include "loggedin.php";

$oid=$_GET['order_id'];

$sql = "DELETE FROM orders where order_id = $oid";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>