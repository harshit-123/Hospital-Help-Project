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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor Registration</title>
</head>
<body>
  <h1>Doctor Registration</h1>
  <?php
     //create connection
	 $cn=mysql_connect("localhost","root","");
	 if(!$cn)
	 {
		 echo"Unable to connect";
		 die();
	 }
	 //open database
	 $db=mysql_select_db("medical_help",$cn);
	 if(!$db)
	 {
		 echo"Database does not exist";
		 die();
	 }
	 $FirstName=$_POST["T1"];
	 $LastName=$_POST["T2"];
	 $Email=$_POST["T3"];
	 $mobileno=$_POST["T4"];
	 $specialist=$_POST["T5"];
	 $gender=$_POST["T6"];
	 $state=$_POST["T7"];
	 $city=$_POST["T8"];
	 $address=$_POST["T9"];
	 $timming=$_POST["T10"];
	 
	 $sun="NO";
	 $mon="NO";
	 $tue="NO";
	 $wed="NO";
	 $thu="NO";
	 $fri="NO";
	 $sat="NO";
	 
	 if(isset($_POST["C1"]))$mon="yes";
	 if(isset($_POST["C2"]))$tue="yes";
	 if(isset($_POST["C3"]))$wed="yes"; 
	 if(isset($_POST["C4"]))$thu="yes";
	 if(isset($_POST["C5"]))$fri="yes";
	 if(isset($_POST["C6"]))$sat="yes";
	 if(isset($_POST["C7"]))$sun="yes";
	 
	 //create query
	 $sql1="insert into doctordata values('$FirstName','$LastName','$Email','$mobileno','$specialist','$gender','$state','$city','$address','$timming','$sun','$mon','$tue','$wed','$thu','$fri','$sat')";
	 //execute query
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
        <h3>Error:Data cannot Be saved successfully</h3>
        <?php
	 }
	 ?>
     <p><a href="HospitalHome.php">Home</a></p>
    <p><a href="DoctorReg.php">Add More</a></p>
</body>
</html>