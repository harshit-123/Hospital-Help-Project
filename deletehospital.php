<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Hospital</title>
</head>

<body>
<h1>Delete Hospital</h1>
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
   $sql="select * from hospitaldata where email='$email'";
   $result=mysql_query($sql,$cn);
   //count rows from result
   $n=mysql_num_rows($result);
   if($n>0)
   {
	   //fetch the rows
	   $rw=mysql_fetch_array($result);
	   //fetch column
	   $name=$rw["noh"];
	   $ht=$rw["ht"];
	   $government=$rw["government"];
	   $emergency=$rw["emergency"];
	   $aoh=$rw["aoh"];
	   $soh=$rw["soh"];
	   $ln=$rw["ln"];
	   $nod=$rw["nod"];
	   $email=$rw["email"];
 ?>
 <h2><?php echo $name;?></h2>
 <p>
   Hospital Type:<?php echo $ht;?><br/>
   Government:<?php echo $government;?><br/>
   Address:<?php echo $aoh;?><br/>
   Emergency Ward:<?php echo $emergency;?><br/>
   State:<?php echo $soh;?><br/>
   Landline Number:<?php echo $ln;?><br/>
   Number of Doctors:<?php echo $nod;?><br/>
   Email:<?php $email;?><br/>
   <h3 style="color:#f00;">Do You Want To Delete???</h3>
   <form method="post" action="deletehospital1.php">
     <input type="hidden" name="email" value="<?php echo $email;?>"/>
     <input type="submit" name="B1" value="Delete"/>
   </form>
 </p>
 <?php
 }
 ?>  
 <p><a href="showdata.php">Back</a></p>
</body>
</html>