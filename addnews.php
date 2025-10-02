
    <!DOCTYPE html>       
<html>              
 <html lang="en">
<head>
  <meta charset="UTF-8">
<title> Add News</title>
  </head>
  <body> 
    <center>         
      <h1> Welcome Add News</h1>  
  <form action="addnews_logic.php" method="post" enctype="multipart/form-data">
<input type="text" name="title" placeholder="title">
<br><br>
  <select name="category_id" required>
    <?php
      include 'connectionondb.php';
      $result = $connection->query("SELECT * FROM categories");
      while($row = $result->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['category_name']}</option>";
      }
    ?>
  </select><br><br>
<textarea name="description" placeholder="description" cols="40" rows="5"></textarea>
<br><br>
<input type="file" name="image" required>
<br><br>

<input type="submit" value="add" name="add">
</center>

  </form>
  </body>
</html>
