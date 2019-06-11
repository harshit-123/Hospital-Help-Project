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
<title>change Password</title>
</head>
<body>
<h1>Change Password</h1>
<?php
	$cn=mysql_connect("localhost","root","");
	if(!$cn)
	{
		echo "Unable To Connect";
		die();
	}
	$db=mysql_select_db("medical_help",$cn);
	if(!$db)
	{
		echo "Database Does Not Exist";
	}
	$oldpass=$_POST["T1"];
	$newpass=$_POST["T2"];
	$sql="update logindata set password='$newpass' where email='$e1' AND password='$oldpass'";
	mysql_query($sql,$cn);
	$n=mysql_affected_rows();
	if($n>0)
	{
		?>
        <h3>Password Changed</h3>
        <?php
	}
	else
	{
		?>
        <h3>Error:Cannot Change Password</h3>
        <?php
	}
?>
<p><a href="Hospital/HospitalHome.php">Continue</a></p>
</body>
</html>