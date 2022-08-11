<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location:login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome <?php echo $_SESSION['username'] ?></title>
<style>
ul{
    list-style: none;

}

li {
  display: inline;
  float: right;
  color: red;
}
img {
  border-radius: 50%;
}
  </style>
  
</head>
<body>
    <nav>
<ul class="ul">
  <li><img src="icon.jpg" alt="" srcset="" height="20px" width="20px"><?php echo $_SESSION['username']?></li>
</ul>
</nav>

<h6>Registered Users</h6>


                <table border="1">
                    <tr>
                    <th>id</th>
                    <th>users</th>
                    <th>password</th>
    
                </tr>

<?php 
include 'config.php'; 

$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];

         ?>

            <tr> 
            <td> <?php echo $id ?></td>    
            <td> <?php echo $username ?></td>    
            <td><?php echo $password ?></td>
          </tr>

<?php


    }

 }


?>

                </table>



                <p>Logout using this link <a href="logout.php">Logout</a></p>


</body>
</html>