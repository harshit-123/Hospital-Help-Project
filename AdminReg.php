<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Registration</title>
</head>

<body>
<h1>Admin Registration:
</h1>
<form name="form1" method="post" action="AdminReg1.php">
  <p>Name:
    <label for="T1"></label>
    <input type="text" name="T1" id="T1">
  </p>
  <p>Address:
    <label for="T2"></label>
    <input type="text" name="T2" id="T2">
  </p>
  <p>Contact:
    <label for="T3"></label>
    <input type="text" name="T3" id="T3">
  </p>
  <p>Email:
    <label for="T4"></label>
    <input type="email" name="T4" id="T4">
  </p>
  <p>Password:
    <label for="T5"></label>
    <input type="password" name="T5" id="T5">
  </p>
  <p>Confirm Password:
    <label for="T6"></label>
    <input type="password" name="T6" id="T6">
  </p>
  <p>
    <input type="submit" name="B1" id="B1" value="Submit">
    <br>
  </p>
</form>
<p><a href="ShowAdmin.php">Show</a></p>
</body>
</html>