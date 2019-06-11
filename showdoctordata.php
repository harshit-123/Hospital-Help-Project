<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor Data</title>
</head>
<body>
 <h1>Doctor Details</h1>
 <?php
  //create Connection
 $cn=mysql_connect("localhost","root","");
 if(!$cn)
 {
	 echo"Unable To Connect";
	 die();
 }
 //open Database
 $db=mysql_select_db("medical_help",$cn);
 if(!$db)
 {
	 echo"Database Does Not Exist";
	 die();
 }
 $sql="select * from doctordata";
 $result=mysql_query($sql,$cn);
 //count row from result
 $n=mysql_num_rows($result);
 if($n>0)
 {
	 while($rw=mysql_fetch_array($result))
	 {
		 //fetch column
		 $FirstName=$rw["FirstName"];
		 $LastName=$rw["LastName"];
		 $Email=$rw["Email"];
		 $MobileNo=$rw["MobileNo"];
		 $specialist=$rw["Specialist"];
		 $gender=$rw["Gender"];
		 $state=$rw["state"];
		 $city=$rw["city"];
		 $address=$rw["address"];
	 ?>
     <p>
       First Name:<?php echo $FirstName;?><br/>
       Last Name:<?php echo $LastName;?><br/>
       Email:<?php echo $Email;?><br/>
       Mobile Number:<?php echo $MobileNo;?><br/>
       Specialist In:<?php echo $specialist;?><br/>
       Gender:<?php echo $gender;?><br/>
       State:<?php echo $state;?><br/>
       City:<?php echo $city;?><br/>
       Address:<?php echo $address;?><br/>
       <a href="EditDoctor.php?email=<?php echo $Email;?>">Edit</a>&nbsp;&nbsp;
       <a href="deletedoctor.php?email=<?php echo $Email;?>">Delete</a> 
     </p>
     <?php
	}
 }
 else
 {
	 ?>
     <h3>No Data Found</h3>
     <?php
 }
 ?>
 <p><a href="DoctorReg.php">Add More</a></p>
</body>
</html>