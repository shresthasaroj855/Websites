
<?php
$err="";
$login ="false";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
include 'config.php';

$username = $_POST["username"];
$password = $_POST["Password"];
    $sql = "SELECT * FROM user where username='$username' AND Password='$password'";
     $result=mysqli_query($conn,$sql);
     $num= mysqli_num_rows($result);
     if($num==1){
      $login=true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: welcome.php");

     }

    

else{
    $showError;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleL.css">
    <title>Login Page</title>
</head>
<body>
<div class="bann">
<div class="nav">
            
            <ul>
                <li><a href="index.php">Home</a></li>
               </ul>
</div>

<center>
<div class="login-form">
<h3>Login page</h3>
  <form action="" method="POST">
    <div class="A">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder=""required><br><br>
</div>
<div class="B">
    <label for="password">Password</label>
    <input type="Password" id="Password" name="Password" ><br><br>
</div>
  <center>
  <p>
    <button type="submit"  value="submit">Login</button>
</p>
       <a href="register.php">
        <h4>  [register]</h4></a>
  </center>
  </form>
</div>
</center>
    
</body>
</html>

