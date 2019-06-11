<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Doctor</title>
</head>
<body>
 <?php
   //receive parameter rom query string
   $email=$_GET["email"];
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
   $sql="select * from doctordata where email='$email'";
   $result=mysql_query($sql,$cn);
   //count rows from result
   $n=mysql_num_rows($result);
   if($n>0)
   {
	   $rw=mysql_fetch_array($result);
	   //fetch column
	     $firstname=$rw["FirstName"];
		 $lastname=$rw["LastName"];
		 $email=$rw["Email"];
		 $mobileno=$rw["MobileNo"];
		 $specialist=$rw["Specialist"];
		 $gender=$rw["Gender"];
		 $state=$rw["state"];
		 $city=$rw["city"];
		 $address=$rw["address"];
		 $timming=$rw["timming"];
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
	
 ?>
 <form id="form1" name="form1" method="post" action="EditDoctor1.php">
 <p>First Name: 
   <label for="T1"></label>
   <input type="text" name="T1" id="T1" value="<?php echo $firstname; ?>">
 </p>
 <p>Last Name:
 <input value="<?php echo $lastname;?>" type="text" name="T2" id="T2"/>
 </p>
 <p>Email:
 <input type="email" value="<?php echo $email;?>" name="T3" id="T3"/>
 </p>
 <p>Mobile Number:
   <input type="text" value="<?php echo $mobileno;?>" name="T4" id="T4"/>
 </p>
 <p>Specialist In:
 <input readonly type="text" value="<?php echo $specialist;?>" name="T5" id="T5"/>
 </p>
 <p>Gender:
  <input type="radio" value="<?php echo $gender;?>" name="T6" id="T6">Male<input type="radio" value="<?php echo $gender;?>" name="T6" id="T6">Female
 </p>
 <p>State:
 <input type="text" value="<?php echo $state;?>" name="T7" id="T7"/>
 </p>
 <p>City:
 <input type="text" value="<?php echo $city;?>" name="T8" id="T8"/>
 </p>
 <p>Address:
  <input type="text" value="<?php echo $address;?>" name="T9" id="T9"/>
 </p>
 <p>Timming:
  <input type="text" value="<?php echo $timming;?>" name="T10" id="T10"/>
 </p>
 <p>Days:
  <input type="checkbox" name="C1" id="R1" value="Mon"/>Mon
    <input type="checkbox" name="C2" id="R2" value="Tue"/>Tue
    <input type="checkbox" name="C3" id="R3" value="Wed"/>Wed
    <input type="checkbox" name="C4" id="R4" value="Thu"/>Thu
    <input type="checkbox" name="C5" id="R5" value="Fri"/>Fri
    <input type="checkbox" name="C6" id="R6" value="Sat"/>Sat
    <input type="checkbox" name="C7" id="R7" value="Sun"/>Sun
 </p>
 <input type="submit" name="B1" id="B1" value="Update">
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
 <p><a href="showdoctordata.php">Show</a></p>
</body>
</html>