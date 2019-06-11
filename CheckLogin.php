<?php
	$email=$_POST["T1"];
	$password=$_POST["T2"];
	$cn=mysql_connect("localhost","root","");
	if(!$cn)
	{
		echo "Unable To Connect";
		die();
	}
	//open database
	$db=mysql_select_db("medical_help",$cn);
	if(!$db)
	{
		echo "Database Does Not Exist";
	}
	$sql="select * from logindata where email='$email' AND password='$password'";
	$result=mysql_query($sql,$cn);
	$n=mysql_num_rows($result);
	if($n>0)//successful
	{
		//find usertype
		$rw=mysql_fetch_array($result);
		$utype=$rw["usertype"];
		//create session
		session_start();
		$_SESSION["email"]=$email;
		$_SESSION["usertype"]=$utype;
		//send to autorized page
		if($utype=="admin")
		{
			header("Location:Admin/AdminHome.php");
			die();
		}
		else if($utype=="hospital")
		{
			header("Location:Hospital/HospitalHome.php");
			die();
		}
		
	}
	else
	{
		header("Location:LoginError.php");
		die();
	}
?>

