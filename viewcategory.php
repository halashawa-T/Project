 <?php

include "connectionondb.php";
$sql = "SELECT * FROM  categories";
     $result = $connection -> query($sql);


?>
 
 <!DOCTYPE html>       
<html>              
 <html lang="en">
<head>
  <meta charset="UTF-8">
<title> View Category</title>
<link rel="stylesheet" href="style.css">
  </head>
  <body> 
   <table border=5px; >
   <tr> 
   <th> Category ID </th>
   <th> Category Name </th>
   
</tr>

<?php if($result -> num_rows != 0){
    while($row = $result ->fetch_assoc()){?>
          <tr>
<td> <?php echo $row["id"] ?> </td>
<td> <?php echo $row["category_name"] ?> </td>
    </tr>

   <?php }
}
?>





</table>
  </body>
</html>