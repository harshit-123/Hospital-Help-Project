<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Second To Time</title>
</head>
<body>
  <?php
     $t=$_POST["P1"];
	 $h=(int)($t/3600);
	 $s=$t%3600;
	 $m=(int)($t/60);
	 $s	=$t%60;
	 echo"h/m/s:$h/$m/$t";
  ?>
</body>
</html>