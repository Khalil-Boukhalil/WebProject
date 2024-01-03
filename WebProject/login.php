<?php
include "config.php";
extract($_POST);
$username=$_POST['username'];
$pass=$_POST['password'];
$login=$_POST['login'];
if(isset($login)){ 
    $query="SELECT * FROM Login WHERE UserName ='$username' AND
    Pass ='$pass'"; 
   $result=mysqli_query($con , $query);
   if(!$result || mysqli_num_rows($result) ==0)
   {
  header('Location:login.php');

   }
   else{
    header('Location:user.php');
    exit;
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
 
    <div id="overlay">
            <div class="login-container">
                <h2>Login</h2>
                <form class="login-form" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button  name="login" onclick="login()">Login</button>
                </form>

                <div class="signup-link">
                    <p>Don't have an account? <a href="SignUp.php">Sign up</a></p>
                </div>
            </div>
        </div>

           <script src="login.js"></script>
</body>
</html>