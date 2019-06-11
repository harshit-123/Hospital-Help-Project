<?php
	session_start();
	if(!isset($_SESSION["email"]))
	{
	   header("Location:../AuthError.php");
	   die();	
	}
	$e1=$_SESSION["email"];
	$ut=$_SESSION["usertype"];
	if($ut!="hospital")
	{
		header("Location:../AuthError.php");
		die();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
</head>
<body>
<form name="form1" method="post" action="ChangePassword1.php">
  <p>Old Password:
    <label for="T1"></label>
    <input type="password" name="T1" id="T1">
  </p>
  <p>New Password:
    <label for="T2"></label>
    <input type="password" name="T2" id="T2">
  </p>
  <p>Confirm Password:
    <label for="T3"></label>
    <input type="password" name="T3" id="T3">
  </p>
  <p>
    <input type="submit" name="B1" id="B1" value="Change">
  </p>
</form>
</body>
</html>