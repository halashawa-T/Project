<?php
session_start();

include "connectionondb.php";




if ($connection -> error == false){
    if(isset($_POST["update_news"])){
        $id = $_POST["new_id"];
        $title = $_POST["new_title"];
         $category_id = $_POST["new_category_id"]; 
          $description = $_POST["new_description"];
         $image_name = '';
    if (!empty($_FILES['new_image']['name']) && is_uploaded_file($_FILES['new_image']['tmp_name'])) {
        $ext = pathinfo($_FILES['new_image']['name'], PATHINFO_EXTENSION);
        $image_name = time() . '.' . $ext;

        $target_dir = "C:/xampp/htdocs/iug/uploads/" . $image_name;
        if (move_uploaded_file($_FILES['new_image']['tmp_name'], $target_dir)) {
       header("Location: viewnews.php");
    } 
    }

       $user_id = $_SESSION["authUser"]["id"];
              $sql = "UPDATE  news SET title = '$title' , description = '$description' , image = '$image_name' , category_id = '$category_id' , user_id = '$user_id' WHERE id = $id";

              $result = $connection -> query($sql);

              

      }
    }
    