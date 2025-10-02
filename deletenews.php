<?php


include "connectionondb.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
   

    $sql = "UPDATE news SET status = 'deleted' WHERE id = $id";
   

    if ( $connection -> query($sql) === true){
        header("Location: viewnews.php");
    }else{
        echo "There was a problem in performing this action , kindly try again";
        }
}