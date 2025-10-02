 <?php
session_start();
?>   
 
 <!DOCTYPE html>       
<html>   
        
 <html lang="en">
<head>
  <meta charset="UTF-8">
<title> create account</title>
  </head>
  <body> 
    <center>         
      <h1> Welcome <?php echo $_SESSION["authUser"]["name"] ?> to Dashboard</h1>  
</center>
      <ul>
        <li><a href="addcategory.php"> add category</a></li>  
        <li><a href="viewcategory.php"> view category</a></li>
     <li><a href="addnews.php"> add news</a></li> 
      <li><a href="viewnews.php"> view all news</a></li> 
     <li><a href="viewdeletednews.php"> view deleted news</a></li> 
</ul>
</body>
</html>
