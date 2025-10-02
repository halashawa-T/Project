<?php

include "connectionondb.php";


if ($connection -> error == false){
    if(isset($_POST["add_category"])){
        $name = $_POST["name"];
        
              $sql = "INSERT INTO categories(category_name) values ('$name')";

              $result = $connection -> query($sql);

              
if ($result == true){
  echo "Added Succesfully";
    }else{
        echo "There was a problem in adding your category , kindly try again";
    }

    }
}