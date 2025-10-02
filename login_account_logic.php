<?php
session_start();

include "connectionondb.php";

if ($connection -> error == false){
    if(isset($_POST["login"])){

          $email = $_POST["email"];
            $password = $_POST["password"];
              
 if(empty($email)){
              header("Location: login.php");
            }

              $sql = "SELECT * FROM users WHERE email = '$email'";

              $result = $connection -> query($sql);

              
if ($result -> num_rows>0){
    $data = $result -> fetch_assoc();
  if(password_verify($password,$data["password"])){
    $_SESSION["authUser"] = $data;
    header("Location: dashboard.php");
  }else{
        echo "There was a problem with logging in , kindly try again";
    }

    }
}
}