<?php
  session_start();
  if(!isset($_SESSION["email"]))
  {
	  header("Location:index.php");
	  die();
  }
  else
  {
	  unset($_SESSION["email"]);
	  unset($_SESSION["usertype"]);
	  session_destroy();
	  header("Location:index.php");
	  die();
  }
?>