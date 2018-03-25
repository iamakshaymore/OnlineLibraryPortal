<?php


include "connection.php";
include "loggedin.php";

$book_id = $_GET['bid'];
$availability = $_POST['availability'];

$sql = "UPDATE Library set availability =".$availability." where bid = ".$book_id;


if ($conn->query($sql) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>