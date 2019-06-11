<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>
<style>
  .container{
	  border:1px solid#000;
	  width:30%;
	  height:30%;
	  text-align:center;
	  float:left;
  }
 .wrapper{
	 width:50%;
	 height:50%;
	 margin:0px auto;
 }
</style>
</head>
<body>
<div class="wrapper">
 <div class="container">
    <form method="post" action="" onsubmit="return A(this)">
       <p>Username:<input type="text" name="username" id="T1"</p>
       <p>Password*:<input type="password" name="password" id="T2"</p>
       <p>Forget Password?</p>
       <input type="submit" name="submit" value="submit"/>
    </form>
 </div>
</div> 
 <script type="text/javascript"> 
 function A(f)
 {
	 if(required(f.T1,"Enter Username")==false){
	 f.T1.focus();
	 return false;
 }
 else if(required(f.T2,"Enter Password")==false)
	{
		f.T2.focus();
		return false;
	}
}
 function required(ele,msg)
{
	if(ele.value==null || ele.value=="")
	{
		alert(msg);
		return false;
	}
	else
	{
		return true;
	}
}

 </script>
</body>
</html>