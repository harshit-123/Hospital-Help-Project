<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Interest</title>
</head>
<body>
  <h>Simple Interest</h>
  <?php
     if(isset($_POST["B4"]))
	 {
		 if(isset($_POST["B1"]))unset($_POST["B1"]);
		  if(isset($_POST["B2"]))unset($_POST["B2"]);
		   if(isset($_POST["B3"]))unset($_POST["B3"]);
		   unset($_POST["B4"]);
	 }
     if(isset($_POST["B1"]))
	 {
		 unset($_POST["B1"]);
		 $p=$_POST["T1"];
		 ?>
         <form method="post" action="">
           <p>p<input type="text" name="T1" id="T1" value="<?php echo $p;?>" readonly="readonly"/>
           </p>
           R<input type="text" name="T2" id="T2"/>
           <input type="submit" name="B2" id="B2" value="Go" />
           <input type="submit" name="B4" value="Reset" />
         </form>
         <?php
	 }
	 else if(isset($_POST["B2"]))
	 {
		 unset($_POST["B2"]);
		 $p=$_POST["T1"];
		 $r=$_POST["T2"];
		 ?>
         <form method="post" action="">
            <p>p <input type="text" name="T1" id="T1" value="<?php echo $r;?>"readonly="readonly" /></p>
            T(Monthes)<input type="text" name="T3" />
            <input type="submit" name="B3" id="B3" value="Go" />
            <input type="submit" name="B4" id="B4" value="Reset"/>
         </form>
		 <?php
	 }
	 else if(isset($_POST["B3"]))
	 {
		 unset($_POST["B3"]);
		 $p=$_POST["T1"];
		 $r=$_POST["T2"];
		 $t=$_POST["T3"];
		 $si=($p*$r*$t)/1200;
		 ?>
         <form method="post" action="">
           <p>p<input type="text" name="T1" id="T1" value="<?php echo $r;?>"readonly="readonly" /></p>
           <p>T(Months)<input type="text" name="T3" value="<?php echo $t;?>" /></p>
         </form>
         <h2>Simple Interest:<?php echo $si;?></h2>
         <?php
	 }
	 else
	 {
		 ?>
         <form method="post" action="">
           p<input type="text" name="T1" id="T1" />
           <input type="submit" name="B1"  id="B1" value="Go" />
         </form>
         <?php
	 }
  ?>
</body>
</html>