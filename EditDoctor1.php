<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Doctor</title>
</head>

<body>
<h1>Edit Doctor Data</h1>
<?php
   //receive parameter rom query string
   //$email=$_GET["email"];
   //create connection
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
 
	   $firstname=$_POST["T1"];
	   $lastname=$_POST["T2"];
	   $email=$_POST["T3"];
	   $mobileno=$_POST["T4"];
	   $specialist=$_POST["T5"];
	   $gender=$_POST["T6"];
	   $state=$_POST["T7"];
	   $city=$_POST["T8"];
	   $address=$_POST["T9"];
	   $sql="update doctordata set FirstName='$firstname',LastName='$lastname',Email='$email',MobileNo='$mobileno',specialist='$specialist',gender='$gender',state='$state',city='$city,address='$address' where email='$email'";
	   mysql_query($sql,$cn);
	   $n=mysql_affected_rows();
	   if($n>0)
	   {
		   ?>
           <h3>Data Saved</h3>
           <?php
	   }
	   else
	   {
		   ?>
           <h3>Error:Try Again</h3>
           <?php
	   }
	  ?>
      <p><a href="showdoctordata.php">Show Details</a></p>
</body>
</html>
</body>
</html>