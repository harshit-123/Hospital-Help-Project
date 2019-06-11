<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Factorial</title>
</head>
<body>
  <h1>Factorial:</h1>
     <?php
	    if(isset($_POST["B2"]))
		{
			if(isset($_POST["B1"]))unset($_POST["B1"]);
			unset($_POST["B2"]);
		}
		
	    if(isset($_POST["B1"]))
		{
			unset($_POST["B1"]);
			$n=$_POST["T1"];
			$fact=1;
			for($i=1;$i<=$n;$i++)
			$fact=$fact*$i;
		   ?>
             <form method="post" action="">
              Fact:<input type="text" name="T1" id="T1" value="<?php echo $n;?>"readonly="readonly"/>
              <input type="submit" name="B2" id="B2" value="Reset">
            </form>
            <h1>Factorial:<?php echo $fact;?></h1>
           <?php
	    }
		else
		{
			?>
			<form method="post" action="">
              Fact:<input type="text" name="T1" id="T1"/>
              <input type="submit" name="B1" id="B1" value="Go">
            </form>
            <?php
			  
          
		}
		?>
</body>
</html>