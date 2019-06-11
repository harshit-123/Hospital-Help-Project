<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pattern</title>
</head>
<body>
   <?php
      $a=$_POST["T1"];
	  $i;$j;
	  for($i=0;$i<=3;$i++)
	  {
		  for($j=0;$j<=3;$j++)
		  {
			  if($j>=4+i)
			   echo "*";
			  else
			    echo " ";
		  }
		  echo "\n";
	  }
   ?>y
</body>
</html>