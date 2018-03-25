<?php
    include "connection.php";
    $uname=strtolower($_POST['uname']);
    $pass=$_POST['pwd'];
    $sql="SELECT uname,pwd FROM users WHERE uname='".$uname."';";
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
                header("Location:./index.php");
              }
            if($auname==$uname && $apwd==$pass){
                
            session_start();
            $_SESSION['uname']=$uname;
            $_SESSION['pwd']=$pass;
            header("Location:./home.php");

                
            }
            else
            header("Location:./index.php");
?>