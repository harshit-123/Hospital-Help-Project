<?php
  session_start();
  if(!isset($_SESSION["email"]))
  {
	  header("Location:../AuthError.php");
	  die();
  }
  $e1=$_SESSION["email"];
  $ut=$_SESSION["usertype"];
  if($ut!="admin")
  {
	  header("Location:../AuthError.php");
	  die();
  }
?>
<html>
	<head>
    	<title>Admin Home</title>
    </head>
    <body>
    	<h1>Admin Block</h1>
        <p><a href="ProfileAdmin.php">Profile</a></p>
        <p><a href="../ChangePasswordAdmin.php">Change Password</a></p>
        <P><a href="AdminReg.php">New Admin</a></P>
        <P><a href="HospitalReg.php">New Hospital</a></P>
        <P><a href="ShowAdmin.php">Show Admins</a></P>
        <P><a href="showdata.php">Manage Hospitals</a></P>
        <P><a href="../Logout.php">Logout</a></P>
    </body>
</html>