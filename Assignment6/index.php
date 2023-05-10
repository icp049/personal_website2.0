<?php


session_start();
$db = new mysqli("localhost", "icp049", "pedigs23", "icp049");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

?>


<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel = "stylesheet" href = "index.css">
</head>
<body>



      
<div class = "container">
      <h1 class = "label">User Login</h1>
      <form class = "login_form" action = "index.php" method = "post" name = "form" >
          <div class = "font"> Username </div>
          <input type = "text" name = "screenname" >
          <div id = "screenname_error"> Invalid Username</div>
    
    
          <div class = "font font2">Password</div>
          <input type = "password" name = "password" >
          <div id = "pass_error"> Passwords must be more than 6 characters</div>

          <input type = "submit" name = "login" value = "Login">

          <p>Don't have an account? </p>
          <a href = "create.html">Create Account</a>
    </form>
</div>






<?php

if (isset($_POST['login'])){
    $screenname = $_POST['screenname'];
    $password = $_POST['password'];


$select = mysqli_query($db, "SELECT * FROM Users WHERE screenname = '$screenname' AND password = '$password'");
$row = mysqli_fetch_array($select);

if(is_array($row)){

    $_SESSION["screenname"] = $row['screenname'];
    $_SESSION["password"] = $row['password'];
    }
    else{
        echo "User not Found";
    }

}

if(isset($_SESSION["screenname"])){
       header("Location:login.php");


}



?>


</body>







