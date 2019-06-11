<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Doctor</title>
</head>
<body>
<h1>Delete Doctor</h1>
<?php
$email=$_GET["email"];
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
	   //fetch the rows
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
 ?>
 <h2><?php echo $firstname;?></h2>
 <p>
   Last Name:<?php echo $lastname;?><br/>
   Email:<?php echo $email;?><br/>
   Mobile Number:<?php echo $mobileno;?><br/>
   Specialist In:<?php echo $specialist;?><br/>
   Gender:<?php echo $gender;?><br/>
   State:<?php echo $state;?><br/>
   City:<?php echo $city;?><br/>
   Address:<?php echo $address;?><br/>
   Timming:<?php echo $timming;?><br/>
   <h3 style="color:#f00;">Do You Want To Delete???</h3>
   <form method="post" action="deletedoctor1.php">
     <input type="hidden" name="email" value="<?php echo $email;?>"/>
     <input type="submit" name="B1" value="Delete"/>
   </form>
 </p>
 <?php
 }
 ?>  
 <p><a href="showdoctordata.php">Back</a></p>
</body>
</html>