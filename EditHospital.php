<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Hospital</title>
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
   $sql="select * from hospitaldata where email='$email'";
   $result=mysql_query($sql,$cn);
   //count rows from result
   $n=mysql_num_rows($result);
   if($n>0)
   {
	   $rw=mysql_fetch_array($result);
	   //fetch column
	   $name=$rw["noh"];
	   $ht=$rw["ht"];
	   $aoh=$rw["aoh"];
	   $government=$rw["government"];
	   $emergency=$rw["emergency"];
	   $soh=$rw["soh"];
	   $ln=$rw["ln"];
	   $nod=$rw["nod"];
	   $email=$rw["email"];
 ?>
 <form id="form1" name="form1" method="post" action="EditHospitals1.php">
 <p>Name of Hospital
 <input value="<?php echo $name;?>" type="text" name="T1" id="T1"/>
 </p>
 <p>Hospital Type
 	<select name="T2" id="T2">
            <option>Select Hospital</option>
            <option>PHC</option>
            <option>CHC</option>
            <option>District Hospital</option>
            <option>Medical College</option>
        </select>
 </p>
 <p>Address
 <input type="text" value="<?php echo $aoh;?>" name="T3" id="T3"/>
 </p>
 <p>Government Type
 	<select name="T4" id="T4">
            <option>Central</option>
            <option>State</option>
            <option>Autonomous Body</option>
            <option>Society</option>
            <option>Cooperative</option>
       </select>
 </p>
 <p>Emergency Ward
 <input type="radio" value="<?php echo $emergency;?>" name="T5" id="T5">Yes<input type="radio" value="<?php echo $emergency;?>" name="T5" id="T5">No
 </p>
 <p>State
  <input type="text" value="<?php echo $soh;?>" name="T6" id="T6"/>
 </p>
 <p>Landline Number
 <input type="text" value="<?php echo $ln;?>" name="T7" id="T7"/>
 </p>
 <p>Number of Doctors
 <input type="text" value="<?php echo $nod;?>" name="T8" id="T8"/>
 </p>
 <p>Email
  <input type="email" value="<?php echo $email;?>" name="T9" id="T9"/>
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
 <p><a href="showdata.php">Show</a></p>
</body>
</html>