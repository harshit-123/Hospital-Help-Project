<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PostBack2</title>
</head>
<body>
  <?php
    if(isset($_POST["B1"]))
	{
		unset($_POST["B1"]);
		$N=isset($_POST["T1"]);
		?>
	}
	else
	{
		<form method="post" action="">
           P<input type="text" name="T1" id="T1" />
           <input type="submit" name="B1" id="B1" value="Go" />
        </form>
	}
  ?>
</body>
</html>