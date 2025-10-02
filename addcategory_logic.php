<?php

include "connectionondb.php";


if ($connection -> error == false){
    if(isset($_POST["add_category"])){
        $name = $_POST["name"];
        
              $sql = "INSERT INTO categories(category_name) values ('$name')";

              $result = $connection -> query($sql);

              if($result == true){
                 header("Location: viewcategory.php");
              }


    }
}