<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Doctor</title>
</head>
<body>
<h1>Delete Doctor Details</h1>
<?php
  $email=$_POST["email"];
  $cn=mysql_connect("localhost","root","");
  if(!$cn)
  {
	  echo"Unable To Connect";
	  die();
  }
  $db=mysql_select_db("medical_help",$cn);
  if(!$db)
  {
	  echo "Database Does Not Exist";
	  die();
  }
   $s1="delete from doctordata where email='$email'";
   mysql_query($s1);
   ?>
   <h3>Data Deleted</h3>
   <p><a href="showdata.php">Continue</a></p>
 
</body>
</html>