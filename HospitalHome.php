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
<title>Hospital Home</title>
</head>

<body>
<h1>Hospital Block</h1>
<p><a href="Profile.php">Profile</a></p>
<p><a href="../ChangePassword.php">Change Password</a></p>
<p><a href="DoctorReg.php">New Doctor</a></p>
<p><a href="showdoctordata.php">Manage Doctors</a></p>
<p><a href="../Logout.php">Logout</a></p>
</body>
</html>