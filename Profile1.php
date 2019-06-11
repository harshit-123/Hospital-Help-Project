<?php
	session_start();
	if(!isset($_SESSION["email"]))
	{
		header("Location:../AuthError.php");
		die();
	}
	$e1=$_SESSION["email"];
	$ut=$_SESSION["usertype"];
	if($ut!="hospital")
	{
		header("Location:../AuthError.php");
		die();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>profile</title>
</head>
<body>
<h1>Profile</h1>
  <?php
    $cn=mysql_connect("localhost","root","");
	if(!$cn)
	{
		echo "Unable To Connect";
		die();
	}
	$db=mysql_select_db("medical_help",$cn);
	if(!$db)
	{
		echo "Database Does Not Exist";
		die();
	}
	$sql="select * from hospitaldata where email='$e1'";//get email from session
	$result=mysql_query($sql,$cn);
	$n=mysql_num_rows($result);
	if($n>0)
	{
		$rw=mysql_fetch_array($result);
		$hospitalname=$rw["noh"];
	    $ht=$rw["ht"];
	    $aoh=$rw["aoh"];
		$government=$rw["government"];
		$emergency=$rw["emergency"];
		$soh=$rw["soh"];
		$ln=$rw["ln"];
		$nod=$rw["nod"];
		$email=$rw["email"];
		?>
                
      <form name="form1" method="post" action="Profile2.php">
        <p>Name of Hospital:
          <label for="T1"></label>
          <input type="text" name="T1" id="T1">
        </p>
        <p>Hospital Type:
          <select name="T2" id="T2">
            <option>Select Hospital</option>
            <option>PHC</option>
            <option>CHC</option>
            <option>District Hospital</option>
            <option>Medical College</option>
        </select>
        </p>
        <p>Address:
          <label for="T3"></label>
          <input readonly type="text" name="T3" id="T3">
        </p>
        <p>Government:
          <select name="T4" id="T4">
            <option>Central</option>
            <option>State</option>
            <option>Autonomous Body</option>
            <option>Society</option>
            <option>Cooperative</option>
       </select>
        </p>
        <p>Emergency Ward:
          <input type="radio" name="T5" id="T5">Yes<input type="radio" name="T5" id="T5">No
        </p>
        <p>State:
          <select name="T6" id="T6">
    <option>Please Select a State</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chhattisgarh</option><option>Delhi</option><option>Goa</option><option>Gujarat</option><option>Harayana</option><option>Himachal Pradesh</option><option>Jammu and Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option>Kerala</option><option>Madhya Praesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Punjab</option><option>Rajasthan</option><option>Seemandhra</option><option>Sikkim</option><option>TamilNadu</option><option>Tilangana</option><option>Tripura</option><option>Uttarpradesh</option><option>WestBengal</option>
    </select>
        </p>
        <p>Landline Number:
          <label for="T7"></label>
          <input readonly type="text" name="T7" id="T7">
        </p>
        <p>Number of Doctors:
          <label for="T8"></label>
          <input readonly type="text" name="T8" id="T8">
        </p>
        <p>Email:
          <label for="T9"></label>
          <input type="email" name="T9" id="T9">
        </p>
        <p>
          <input type="submit" name="B1" id="B1" value="Update">
        </p>
      </form>
      <?php 
     }
	 else
	 {
		 ?>
         <h3>No Data Found</h3>
         <?php
	 }
	 
	 ?>
     <p><a href="Profile.php">Back</a></p>
     <p><a href="HospitalHome.php">Home</a></p>
</body>
</html>