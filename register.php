<?php
$err="";
$showError ="false";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
include 'config.php';

$username = $_POST["username"];
$password = $_POST["Password"];
$cpassword = $_POST["cpassword"];
$exists=false;
if(($password==$cpassword) && $exists==false){
    $sql = "INSERT INTO `user` (`username`, `password`, `cpassword`)
     VALUES ('$username', '$password', '$cpassword')";
     $result=mysqli_query($conn,$sql);
     header("location:login.php");

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
    <link rel="stylesheet" href="styleR.css">
    <title>Register Page</title>
</head>
<body>



<div class="bann">
<div class="nav">
            
            <ul>
                <li><a href="index.php">Home</a></li>
               </ul>
</div>

<center>
<div class="Register-form">
<h3>Register</h3>

  <form action="" method="POST">
    
    <div class="A">
    <label for="username">User<span>Name</span> </label>
    <input type="text" id="username " name="username" placeholder=""required><br><br>
</div>
<div class="B">
    <label for="password">Password</label>
    <input type="Password" id="Password" name="Password" required><br><br>
</div>
<div class="C">
    <label for="cpassword"><span>confirm</span> Password</label>
    <input type="password" name="cpassword" id="cpassword" required><br><br>
</div>

  <center>
    <p>
    <button type="submit"  value="submit">submit</button>
</p>
       <a href="login.php">
        <h1>   Login Here</h1></a>
  </center>
  </form>
</div>
</center>
</div>  
</body>
</html>

