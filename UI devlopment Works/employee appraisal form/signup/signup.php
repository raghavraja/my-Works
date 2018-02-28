<?php
session_start();
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$user   = mysqli_real_escape_string($con,$_POST['uname']);
$pwd    = mysqli_real_escape_string($con,$_POST['pass']);
$sql    = "SELECT id FROM employee WHERE uname='$user' and pass='$pwd'";
$result = mysqli_query($con,$sql);

$row    = mysqli_fetch_array($result);

$count  = mysqli_num_rows($result);


if($count=="")
{
	echo "please enter your username and password";
}
else if($count==$result)
{
$_SESSION['login_user']=$user;
header("Location:index.php");
}
else
{
$error="your login username or password is invalid";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="data">
<div class="logo">
<img src="newlogo.png">
</div>
<form name="fname" action="" method="post">
<table class="mark">
<tr>
<td>Id</td>
<td><input type="text" autocomplete="off" name="id" id="id"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" autocomplete="off" name="uname" id="uname"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" autocomplete="off" name="pass" id="pass"></td>
</tr>
<td></td>
<td><input type="submit" name="submit" value="submit" id="submit" class="box1">
<input type="reset" name="reset" value="reset" id="reset" class="box1"></td>
</td>
</tr>
</table>
</form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error=''; ?></div>
</div>
</body>
</html>