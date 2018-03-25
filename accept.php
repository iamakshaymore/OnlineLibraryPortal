<?php
include "connection.php";
include "loggedin.php";
$uname=$_SESSION["uname"];
$lid=$_GET['lid'];

$sql = "SELECT * FROM users Where uname='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc()){
$ubud=$row["bud"];
}}

$sql1= "SELECT * FROM loan Where lid=$lid";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0){
while($row1 = $result1->fetch_assoc()){
$lamt=$row1["lamt"];
$lufrom=$row1["lufrom"];
}}

$diff=$ubud-$lamt;

if($diff>0)
{
$sql2 = "UPDATE users SET  bud = bud-$lamt WHERE uname ='$uname'";
$sql3 = "UPDATE users SET  bud = bud+$lamt WHERE uname ='$lufrom'";
$sql4 = "UPDATE  loan SET  lstatus = 'Accepted' WHERE lid =$lid";
if ($conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE)
header('Location:./loan.php');
}


?>