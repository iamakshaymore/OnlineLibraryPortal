<?php
include "connection.php";
session_start();
        $uname=$_SESSION['uname'];
        $pass=$_SESSION['pwd'];
        $sql="SELECT uname,pwd FROM users WHERE uname='$uname';";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) 
              {
                  while($row = $result->fetch_assoc()) {
                        $auname=$row['uname'];
                        $apwd=$row['pwd'];
                          }
              }
            else
                {
                header("Location:/");
              }
            if($auname!=$uname || $apwd!=$pass)
            header("Location:./index.php");
?>
