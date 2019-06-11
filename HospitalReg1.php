<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital Registration </title>
</head>
<body>
  <h1>Hospital Registration</h1>
  <?php
    //create connection
    $cn=mysql_connect("localhost","root","");
	if(!$cn)
	{
		echo "Unable To Connect";
		die();
	}
	//echo $cn; die();
	//open database
	$db=mysql_select_db("medical_help",$cn);
	if(!$db)
	{
		echo "database does not exist";
		die();
	}
	$noh=$_POST["T1"];
	$ht=$_POST["T2"];
	$government=$_POST["T3"];
	$aoh=$_POST["T4"];
	$emergency=$_POST["T5"];
	$soh=$_POST["T6"];
	$ln=$_POST["T7"];
	$nod=$_POST["T8"];
	$email=$_POST["T9"];
	$password=$_POST["T10"];
	$confirm_password=$_POST["T11"];
	$usertype="hospital";
	//create query
	$sql1="insert into hospitaldata  values('$noh','$ht','$government','$aoh','$emergency','$soh','$ln','$nod','$email','$password')";
	$sql2="insert into logindata values('$email','$password','$usertype')";
	//execute query
	mysql_query($sql1,$cn);
	$n=mysql_affected_rows();
	if($n==1)
	{
		?>
        <h3>Data saved</h3>
        <?php
	}
	else
	{
		?>
        <h3>Error:Data cannot be saved successfully</h3>
        <?php
	}
    mysql_query($sql2,$cn);
	$n=mysql_affected_rows();
	if($n==1)
	{
		?>
        <h3>Login created</h3>
        <?php
	}
	else
	{
		?>
        <h3>Error:Login cannot create successfully</h3>
        <?php
	}
	?>
    <p><a href="HospitalReg.php">Add more</a></p>
</body>
</html>