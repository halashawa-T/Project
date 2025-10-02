<?php
session_start();

include "connectionondb.php";



if ($connection -> error == false){
    if(isset($_POST["add"])){
        $title = $_POST["title"];
         $category_id = $_POST["category_id"]; 
          $description = $_POST["description"];
         $image_name = '';
    if (!empty($_FILES['image']['name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_name = time() . '.' . $ext;

        $target_dir = "C:/xampp/htdocs/iug/uploads/" . $image_name;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
        echo " Image uploaded successfully to: $target_dir<br>";
    } else {
        echo " Failed to move image<br>";
    }
    }

  $user_id = $_SESSION["authUser"]["id"];
              $sql = "INSERT INTO news(title , description , image ,  category_id , user_id ) values ('$title','$description','$image_name' , '$category_id' , '$user_id')";

              $result = $connection -> query($sql);

              
if ($result == true){
  echo "News Added Successfully";
    }else{
        echo "There was a problem in adding news , kindly try again";
        }
      }
    }
    
