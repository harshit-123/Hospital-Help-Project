<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Square,cube and half</title>
</head>
<body>
<?php
   $a=$_POST["T1"];
   $ans=0;
   if(isset($_POST["B1"]))$ans=$a*$a;
   else if(isset($_POST["B2"]))$ans=$a*$a*$a;
   else if(isset($_POST["B3"]))$ans=$a/2;
  ?>
  <h2>Result:<?php echo $ans;?></h2>
</body>
</html>