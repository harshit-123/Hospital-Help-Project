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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<h1>Profile</h1>
<?php
  $address=$_POST["T3"];
  $NumberofDoctors=$_POST["T8"];
  $LandlineNumber=$_POST["T7"];
  $cn=mysql_query("localhost","root","");
  if(!$cn)
  {
	  echo "Unable To Connect";
	  die();
  }
  $db=mysql_select_db("medical_help","root","");
  if(!$db)
  {
	  echo "Database Does Not Exist";
	  die();
  }
  $sql="update hospitaldata set address='$address',NumberofDoctors='$NumberofDoctors',LandlineNumber='$LandlineNumber' where email='$e1'";
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
      <h3>Error:Cannot Save Data</h3>
      <?php
  }
?>
<p><a href="HospitalHome.php">Continue</a></p>
</body>
</html>