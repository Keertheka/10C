<?php
include('login.php'); // Includes Login Script
if (isset($_POST['submit'])) 
  {
  if (empty($_POST['username']) || empty($_POST['password'])) {
  $error = "Username or Password is invalid";
  }
  else
  { 	
      header("location: Placement.html");
  }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign in</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
   body{
    background-image:url(si.jpg);
    background-repeat:no-repeat;
    background-size: 100% 1000px;
  }
  </style>
</head>
<body>
<div id="login">
<h2>Sign in here😊😊</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="****" type="password"><br><br>
<input name="submit" type="submit" value=" Sign in ">
<label><h2>Don't have account!!...Create new account</h2></label>
<input name="signup" type="submit" value=" Sign up">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>
