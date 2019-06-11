<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Data</title>
</head>
<body>
  <h1>Admin</h1>
  <?php
     //create connection
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
		 echo "Database does not exit";
		 die();
	 }
	 $sql="select * from hospitaldata";
	 $result=mysql_query($sql,$cn);
	 //count rows from result
	 $n=mysql_num_rows($result);
	 if($n>0)
	 {
		 while($rw=mysql_fetch_array($result))
		 {
			 //fetch column
			 $name=$rw["noh"];
			 $ht=$rw["ht"];
			 $government=$rw["government"];
			 $aoh=$rw["aoh"];
			 $emergency=$rw["emergency"];
			 $soh=$rw["soh"];
			 $ln=$rw["ln"];
			 $nod=$rw["nod"];
			 $email=$rw["email"];
			 //$password=$rw["password"];
			 ?>
             <h3><?php echo $name;?></h3>
             <p>
             Hospital type:<?php echo $ht;?><br/>
             Address:<?php echo $government;?><br/>
             Government:<?php echo $aoh;?><br/>
             Emergency Ward:<?php echo $emergency;?><br/>
             State:<?php echo $soh;?><br/>
             Landine Number:<?php echo $ln;?><br/>
             Number of Doctors:<?php echo $nod;?><br/>
             Email:<?php echo $email;?><br/>
             <a href="Edithospital.php?email=<?php echo $email;?>">Edit</a>||<a href="deletehospital.php?email=<?php echo $email;?>">Delete</a>
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
  <p><a href="HospitalReg.php">Add More</a></p>
</body>
</html>