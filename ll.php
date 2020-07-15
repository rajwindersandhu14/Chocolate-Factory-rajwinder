<?php

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$error="";
$success="";

   if( isset($_POST['submit']) )
{
    if($uname=="admin")
  {
    if($pass=="password")
    {
     $error=="";
     $success=="welcome admin";
    }
    else
    {
      $error="invalid password"; 
      $success="";    
    }
  }
    else
  {
      $error="invalid username";
      $success="";
  }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-login-form</title>
</head>
<body>
    <div class="container">
    <p class="error">  <?php echo $error;  ?></p>  
     <p class="success">  <?php echo $success;  ?></p>
    
    <form method="post">

    <input type="text" name="uname" value="" placeholder="enter admin name" required > <br>
    <input type="password" name="pass" value="" placeholder="password" required > <br>
    <input type="submit" name="submit" value="LOG-IN"> <br>
    <a href="#">Forget password</a>

    </form>


    </div>
    
</body>
</html> 