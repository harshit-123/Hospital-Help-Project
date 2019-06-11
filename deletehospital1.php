<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Hospital</title>
</head>
<body>
<h1>Delete Hospital Data</h1>
<?php
   //receive parameter rom query string
   //$email=$_GET["email"];
   //create connection
   $email=$_POST["email"];
   $cn=mysql_connect("localhost","root","");
   if(!$cn)
   {
	   echo "Unable to Connect";
	   die();
   }
   //open database
   $db=mysql_select_db("medical_help",$cn);
   if(!$db)
   {
	   echo "Database does not exist";
	   die();
   }
   $s1="delete from hospitaldata where email='$email'";
   $s2="delete from logindata where email='$email'";
   mysql_query($s1);
   mysql_query($s2);
   ?>
   <h3>Data Deleted</h3>
   <p><a href="showdata.php">Continue</a></p>
 
</body>
</html>