 <!DOCTYPE html>       
<html>              
 <html lang="en">
<head>
  <meta charset="UTF-8">
<title> Login</title>
<link rel="stylesheet" href="style.css">
  </head>
  <body> 
    <div class = "container">
    <center>         
      <h1> Hello to login page</h1>  
     
     <?php
      if(isset($_GET["statusCode"])){
        if($_GET["statusCode"]== "201"){
            echo "<b> Account Created Succesfully </b>";
        }
      }
      
      ?>

  <form action="login_account_logic.php" method="post">
<input type="email" name="email" placeholder="email">
<br>
<input type="password" name="password" placeholder="password">
<br>


<input type="submit" value="login" name="login">
</center>

  </form>
    </div>
  </body>
</html>
