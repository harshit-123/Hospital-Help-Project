<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Php</title>
</head>
<body>
  <?php
     $a=$_POST["T1"];
	 $b=$_POST["T2"];
	  if($a>$b)
	    echo"<h3> Result: Value1 is Greater</h3>";
	   else if($b>$a)
	    echo"<h3>Result: Value2 is Greater</h3>";
	  else
	    echo"<h3>Result: Both Are Equal</h3>";
  ?>
</body>
</html>