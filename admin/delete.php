<?php

include "connection.php";
include "loggedin.php";

$book_id = $_GET['bid'];


$sql = "DELETE FROM Library where bid = $book_id";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>