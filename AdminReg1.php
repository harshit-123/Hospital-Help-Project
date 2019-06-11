<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Registration</title>
</head>
<body>
<h1>Admin Registration</h1>
<?php
 //create connection
 $cn=mysql_connect("localhost","root","");
 if(!$cn)
 {
	 echo "Unable To Connect";
	 die();
 }
 //create database
 $db=mysql_select_db("medical_help",$cn);
 if(!$db)
 {
	 echo "Database Does not Exist";
	 die();
 }
 $name=$_POST["T1"];
 $address=$_POST["T2"];
 $contact=$_POST["T3"];
 $email=$_POST["T4"];
 $password=$_POST["T5"];
 $usertype="admin";
 //create Query
 $sql1="insert into admindata values('$name','$address','$contact','$email')";
  //execute Query
 mysql_query($sql1,$cn);
 $n=mysql_affected_rows();
 if($n==1)
 {
	?>
    <h3>Data Saved</h3>
    <?php
 }
 else
 {
	 ?>
     <h3>Error:Cannot Create Data</h3>
     <?php
 }
 $sql2="insert into logindata values('$email','$password','$usertype')";
mysql_query($sql2,$cn);
 $n=mysql_affected_rows();
 if($n==1)
 {
	?>
    <h3>Login  created</h3>
    <?php
 }
 else
 {
	 ?>
     <h3>Error:Cannot Create Login</h3>
     <?php
 }
 ?>
 <p><a href="AdminReg.php">Add More</a></p>
 <p><a href="ShowAdmin.php">Show</a></p>
</body>
</html>