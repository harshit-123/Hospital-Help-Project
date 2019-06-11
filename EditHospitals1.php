<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Hospital</title>
</head>

<body>
<h1>Edit Hospital Data</h1>
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
 
	   $name=$_POST["T1"];
	   $ht=$_POST["T2"];
	   $government=$_POST["T3"];
	   $aoh=$_POST["T4"];
	   $emergency=$_POST["T5"];
	   $soh=$_POST["T6"];
	   $ln=$_POST["T7"];
	   $nod=$_POST["T8"];
	   $email=$_POST["T9"];
	   $sql="update hospitaldata set noh='$name',ht='$ht',government='$government',aoh='$aoh',emergency='$emergency',soh='$soh',ln='$ln',nod='$nod' where email='$email'";
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
      <p><a href="showdata.php">Show Hospitals</a></p>
</body>
</html>