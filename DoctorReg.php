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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor Registration</title>
</head>
<body>
<h1>Doctor Registration Form:</h1>
<table cellpadding="8">
<form id="form1" name="form1" method="post" action="DoctorReg1.php">
  <tr>
  <td>First Name:</td>
  <td><input type="text" name="T1" id="T1" /></td>
  </tr>
  <tr>
  <td>Last Name:</td>
  <td><input type="text" name="T2" id="T2" /></td>
  </tr>
  <tr>
  <td>Email:</td>
  <td><input type="email" name="T3" id="T3" /></td>
  </tr>
  <tr>
  <td>Mobile No:</td>
  <td><input type="text" name="T4" id="T4" /></td>
  </tr>
  <tr>
  <td>Specilist In:</td>
  <td><select name="T5" id="T5">
      <option>Anaesthesia</option><option>Cardiologist</option><option>Dentist</option><option>Dermatologist</option><option>Diabetologist</option><option>Gynaecologist</option><option>Neurologist</option><option>Orthopaedics</option><option>Psychaetrist</option><option>Radiologist</option><option>Sexologist</option><option>Nurologist</option>
      </select></td>
  </tr>
  <tr>
  <td>Gender:</td>
  <td><input type="radio" name="T6" id="T6" />Male<input type="radio" name="T6" id="T6" />Female</td>
  </tr>
  <tr>
  <td>State:</td>
  <td><select name="T7" id="T7">
       <option>Please Select a State:</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chattisgarh</option><option>Delhi</option><option>Goa</option><option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option><option>Jammu and Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option>Kerala</option><option>Madhya Pradesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Punjab</option><option>Rajasthan</option><option>Seemandhra</option><option>Sikkim</option><option>Tamil Nadu</option><option>Telangana</option><option>Tripura</option><option>Uttar Pradesh</option><option>West Bengal</option> 
     </select></td>
  </tr>
  <tr>
  <td>City:</td>
  <td><input type="text" name="T8" id="T8" /></td>
  </tr>
  <tr>
  <td>Address:</td>
  <td><textarea name="T9" id="T9" cols="34" rows="2"></textarea></td>
  </tr>
   <tr>
  <td>Time:</td>
    <td><input type="text" name="T10" id="T10"/>(9am to 10am)</td>
  </tr>
  <tr>
  <td>Days:</td>
  <td>
    <input type="checkbox" name="C1" id="R1" value="Mon"/>Mon
    <input type="checkbox" name="C2" id="R2" value="Tue"/>Tue
    <input type="checkbox" name="C3" id="R3" value="Wed"/>Wed
    <input type="checkbox" name="C4" id="R4" value="Thu"/>Thu
    <input type="checkbox" name="C5" id="R5" value="Fri"/>Fri
    <input type="checkbox" name="C6" id="R6" value="Sat"/>Sat
    <input type="checkbox" name="C7" id="R7" value="Sun"/>Sun
  </td>
  </tr>
  <tr>
  <td><input type="submit" name="B1" id="B1" value="Submit" /></td>
  </tr>
</form>
</table>
<p><a href="showdoctordata.php">show Data</p>
</body>
</html>