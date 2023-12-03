<?php
include '../config/config.php';
session_start();
if(!isset($_SESSION['SESSION_EMAIL'])){
   // echo "<script>alert('Login First to Save Property')</script>";
   // header('location: ../index.php');
   header("Location: login.php");

} else {
   $user_id = $_SESSION['SESSION_EMAIL'];
   $houses_id = $_GET['id'];

   $sql_check = "SELECT * FROM saved WHERE houses_id = '$houses_id'";
   $result_check = mysqli_query($conn, $sql_check);

   if (mysqli_num_rows($result_check) > 0) {
      // echo "<script>alert('Houses already exist in saved list')</script>";
      header("Location: ../house-details.php?id=$houses_id");
   } else {

      $insertfavlist = "INSERT INTO `saved`(`userEmail`, `houses_id`) VALUES ('$user_id','$houses_id')";

      if (mysqli_query($conn, $insertfavlist)) {
         // echo "<script>alert('Add to Saved Property')</script>";
         header("Location: ../house-details.php?id=$houses_id");
      }
   }
}


?>


