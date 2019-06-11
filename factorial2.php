<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Factorial</title>
</head>
<body>
  <h3>Factorial of given Number:</h3>
  <?php
     /*$a=$_POST["F1"];
	 $c=fact(F1);
	 echo"<h3>Result: Factorial is:$c</h3>";
	  fact(F1)
	 {
		 if(F1>0)
		   return (F1*fact(F1-1));
		   else
		    return(1);
	 }*/
	 $a=$_POST["F1"];
	 $c=fact($a);
	 function fact($a)
	 {
		 if($a<=1)
		   return 1;
		 else
		   return $a*fact($a-1); 
	 }
	 echo"Factorial is:$c";
  ?>
</body>
</html>