<?php

include "connectionondb.php";

function validate($data){
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($connection -> error == false){
    if(isset($_POST["create"])){
        $name = validate($_POST["name"]);
          $email = validate($_POST["email"]);
            $password = password_hash(validate($_POST["password"]), PASSWORD_BCRYPT);
              


              $sql = "INSERT INTO users(name , email , password) values ('$name','$email','$password')";

              $result = $connection -> query($sql);

              
if ($result == true){
  header("Location: login.php?statusCode=201");
    }else{
        echo "There was a problem in creating your account , kindly try again";
    }

    }
}

