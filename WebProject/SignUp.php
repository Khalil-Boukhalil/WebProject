<?php
include "config.php";
extract ($_POST);
$username=$_POST['userName'];
$email=$_POST['email'];
$password=$_POST['pass'];
$done=$_POST['done'];

if(isset($done)){
    $query="INSERT INTO Login(UserName ,Pass ,email)  
    Values ('$username','$password' ,'$email')";
    $result=mysqli_query($con , $query);
    
    if(!$result){
      die('Record not added ...' . mysqli_error($con)); 
    }
    else{
    header('Location:login.php');
 
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>

    <div id="overlay">
        <div class="login-container">
            <h2>Register</h2>
            <form class="login-form" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="userName" required>

                <label for="username">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>

                <button type="submit" name="done">Register</button>
            </form>
            <div class="signup-link">
                <p>You have an account? <a href="Login.php">Log In</a></p>
            </div>
        </div>
    </div>
    </div>

</body>

</html>