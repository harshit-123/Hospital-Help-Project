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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>profile</title>
</head>
<body>
<h1>Profile</h1>
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
		die();
	}
	$sql="select * from admindata where email='$e1'";//get email from session
	$result=mysql_query($sql,$cn);
	$n=mysql_num_rows($result);
	if($n>0)
	{
		$rw=mysql_fetch_array($result);
		$name=$rw["name"];
	    $address=$rw["address"];
	    $contact=$rw["contact"];
		$email=$rw["email"];
		?>
                
      <form name="form1" method="post" action="">
        <p>Name:
          <label for="T1"></label>
          <input type="text" name="T1" id="T1">
        </p>
        <p>Address:
        <input type="text" name="T2" id="T2"/>
        </p>
        <p>Contact:
        	<input type="text" name="T3" id="T3"/>
        </p>
        <p>Email:
          <input type="email" name="T4" id="T4"/>
        </p>
      </form>
      <?php 
     }
	 else
	 {
		 ?>
         <h3>No Data Found</h3>
         <?php
	 }
	 
	 ?>
     <p><a href="ProfileAdmin.php">Back</a></p>
     <p><a href="AdminHome.php">Home</a></p>
</body>
</html>