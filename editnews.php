
    <!DOCTYPE html>       
<html>              
 <html lang="en">
<head>
  <meta charset="UTF-8">
<title> Edit News</title>
  </head>
  <body> 
    <center>         
      <h1> Welcome to Editing News Form</h1>  
  <form action="editnews_logic.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="new_id" value="<?php echo $_GET["id"] ;?>">
<input type="text" name="new_title" placeholder="title" value="<?php echo $_GET["title"] ?>">
<br><br>
  <select name="new_category_id" required>
    <?php
      include 'connectionondb.php';
      $result = $connection->query("SELECT * FROM categories");
      while($row = $result->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['category_name']}</option>";
      }
    ?>
  </select><br><br>
<textarea name="new_description" placeholder="description" cols="40" rows="5"></textarea>
<br><br>
<input type="file" name="new_image" required>
<br><br>

<input type="submit" value="update_news" name="update_news">
</center>

  </form>
  </body>
</html>