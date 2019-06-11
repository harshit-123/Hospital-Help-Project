<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hostal Registration</title>
<link type="text/javascript" href="HospitalReg.js">
</head>
<body>
  <h1>Hospital Registration Form:</h1>
  <table cellpadding="8">
  <form id="form1" name="form1" method="post" action="HospitalReg1.php" onSubmit="return B(this)">
     <tr>
       <td><b>Name of Hospital:</b></td>
       <td><input type="text" name="T1" id="T1" /></td>
     </tr>
     <tr>
       <td><b>Hospital Type:</b></td>
       <td>
        <select name="T2" id="T2">
            <option>Select Hospital</option>
            <option>PHC</option>
            <option>CHC</option>
            <option>District Hospital</option>
            <option>Medical College</option>
        </select>
    </td>
    </tr>
    <tr>  
       <td><b>Government:</b></td>
       <td>
       <select name="T3" id="T3">
            <option>Central</option>
            <option>State</option>
            <option>Autonomous Body</option>
            <option>Society</option>
            <option>Cooperative</option>
       </select>
       </td>
    </tr>
    <tr>   
       <td><b>Address:</b></td>
       <td><textarea name="T4" id="T4" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
       <td><b>Emergency Ward:</b></td>
       <td><input type="radio" name="T5" id="T5">Yes<input type="radio" name="T5" id="T5">No</td>
    </tr>
    <tr>   
       <td><b>State:</b></td>
       <td>
           <select name="T6" id="T6">
    <option>Please Select a State</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chhattisgarh</option><option>Delhi</option><option>Goa</option><option>Gujarat</option><option>Harayana</option><option>Himachal Pradesh</option><option>Jammu and Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option>Kerala</option><option>Madhya Praesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Punjab</option><option>Rajasthan</option><option>Seemandhra</option><option>Sikkim</option><option>TamilNadu</option><option>Tilangana</option><option>Tripura</option><option>Uttarpradesh</option><option>WestBengal</option>
    </select>
       </td>
    </tr>
    
    <tr>   
       <td><b>Landline Number:</b></td>
       <td><input type="text" name="T7" id="T7" /></td>
    </tr> 
    <tr>  
       <td><b>Number of Doctor in Hospital:</b></td>
       <td> <input type="text" name="T8" id="T8" /></td>
    </tr>
    <tr>
       <td><b>Email Address</b></td>
       <td> <input type="email" name="T9" id="T9" /></td>
     </tr>
     <tr>
     <td><b>Password:</b></td>
     <td><input type="password" name="T10" id="T10"</td>
     </tr>
     <tr>
     <td><b>Confirm Password:</b></td>
     <td><input type="password" name="T11" id="T11"</td>
     </tr>
  </table>
  <input type="submit" name="B1" id="B1" value="Submit" />
    </form>
    <p><a href="showdata.php">Show</a></p>
</body>
</html>