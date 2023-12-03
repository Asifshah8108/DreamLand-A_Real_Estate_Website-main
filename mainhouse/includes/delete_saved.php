<?php
include '../config/config.php';
session_start();
if(!isset($_SESSION['SESSION_EMAIL'])){
   header('location: ../index.php');
} else {
//    $user_id = $_SESSION['SESSION_EMAIL'];
   $houses_id = $_GET['id'];



      $delfavlist = "DELETE FROM `saved` WHERE houses_id = '$houses_id'";

      if (mysqli_query($conn, $delfavlist)) {
         echo "<script>alert('Removed From Saved')</script>";
         header('location: ../saved.php');
      }else{
        echo "<script>alert('Something Went Wrong')</script>";
      }
   }


?>


