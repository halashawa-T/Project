 <?php
session_start();
 $user_id = $_SESSION["authUser"]["id"];

include "connectionondb.php";
$sql = "SELECT news.id ,news.title, news.description, news.image, users.name AS user_name
        FROM news
        JOIN categories ON news.category_id = categories.id
       Left JOIN users ON news.user_id = users.id
        WHERE news.status = 'active' AND news.user_id = '$user_id'";


     $result = $connection -> query($sql);


?>
 
 <!DOCTYPE html>       
<html>              
 <html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
<title> View News Details</title>
  </head>
  <body> 
   <table border=5px; >
   <tr> 
   <th> Title </th>
   <th> Description </th>
   <th> Image </th>
   <th> Added By </th>
   <th> Actions</th>
</tr>

<?php if($result -> num_rows != 0){
    while($row = $result ->fetch_assoc()){?>
          <tr>
<td> <?php echo $row['title'] ?> </td>
<td> <?php echo $row['description'] ?> </td>
<td><img src="uploads/<?php echo $row['image']; ?>" alt="News Image" style="width:100px"></td>
<td> <?php echo $row['user_name'] ?> </td>
<td>
    <a href="editnews.php?id=<?php echo $row['id'] ?>&title=<?php echo $row['title']; ?>">Edit</a>
   <a href="deletenews.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
 </tr>

   <?php 
   }
}
?>




</table>
  </body>
</html>