<?php
    session_start();
	if(!isset($_SESSION["email"]))
	{
		header("Location:../AuthError.php");
		die();
	}
	$e1=$_SESSION["email"];
	$ut=$_SESSION["usertype"];
	if($ut!="admin")
	{
		header("Location:../AuthError.php");
		die();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
</head>
<body>
<h1>Profile</h1>
<?php
  $cn=mysql_connect("localhost","root","");
  if(!$cn)
  {
	  echo "Unable To Connect";
	  die();
  }
  $db=mysql_select_db("medical_help",$cn);
  if(!$db)
  {
	  echo "Database Does Not Exist";
	  die();
  }
  $sql="select * from admindata where email='$e1'";//get email from session
  $result=mysql_query($sql,$cn);
  $n=mysql_num_rows($result);
  if($n>0)
  {
	  $rw=mysql_fetch_array($result);
	  $name=$rw["name"];
	  $address=$rw["address"];
	  $contact=$rw["contact"];
	  $email=$rw["email"];
	  ?>
      <h3><?php echo $name;?></h3>
      <p>
      	Address:<?php echo $address;?><br/>
        Contact:<?php echo $contact;?><br/>
        Email:<?php echo $email;?><br/>
        <a href="ProfileAdmin1.php?email=<?php echo $email;?>">Edit</a>
      </p>
      <?php
  }
  else
  {
	  ?>
      <h3>No Data Found</h3>
      <?php
  }
 ?>
</body>
</html>