<?php
//  if(isset($_POST['Logout']))
//  {
//     session_destroy();
//     header("location: Admin Login.php");
//  }
session_start();

session_destroy();

header("location: login.php")
 ?>