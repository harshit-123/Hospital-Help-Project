<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reverse</title>
</head>
<body>
<?php
    $a=$_POST["T1"];
	$rev=0;
	$rem;
	while($a!=0)
	{
		$rem=$a%10;
		$rev=$rev*10+$rem;
		$a=(int)($a/10);
	}
?>
<h2> Reverse:<?php echo $rev;?></h2>
</body>
</html>