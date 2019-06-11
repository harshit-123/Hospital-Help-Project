<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
</head>

<body>
<h1>Logged Admins</h1>
<?php
 //create connection
 $cn=mysql_connect("localhost","root","");
 if(!$cn)
 {
	 echo "Unable To Connect";
	 die();
 }
 //create database
 $db=mysql_select_db("medical_help",$cn);
 if(!$db)
 {
	 echo "Database Doesnot Exist";
	 die();
 }
 $sql="select * from admindata";
 $result=mysql_query($sql,$cn);
 //count rows from result
 $n=mysql_num_rows($result);
 if($n>0)
 {
	 //fetch the rows
	 while($rw=mysql_fetch_array($result))
	 {
		 $name=$rw["name"];
		 $address=$rw["address"];
		 $contact=$rw["contact"];
		 $email=$rw["email"];
	 ?>
     <h3><?php echo $name; ?></h3>
     <p>
     	Address:<?php echo $address;?><br/>
		Contact:<?php echo $contact;?><br/>
        Email:<?php echo $email;?><br/>
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
</body>
</html>