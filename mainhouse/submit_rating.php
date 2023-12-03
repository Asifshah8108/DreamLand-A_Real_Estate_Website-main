<?php
session_start();
if(!isset($_SESSION['SESSION_EMAIL'])){
    header("location: index.php");
}
?>
<?php

include 'config/config.php';
if(isset($_POST['rating_data']))
{
    $hid = $_POST['hid'];
    $user_name = $_POST['user_name'];
    $user_rating = $_POST['rating_data'];
    $user_review = $_POST['user_review'];
    
    $currentUser = $_SESSION['SESSION_EMAIL'];

    $rev = "INSERT INTO `tbl_review`(`hid`, `user_name`, `user_rating`, `user_review`, `mail`) VALUES ('$hid','$user_name',$user_rating,'$user_review','$currentUser')";
    $rev_run = mysqli_query($conn, $rev);
    if($rev_run==true)
    {
        echo '<script>alert("Booked successfuly.");</script>';
        // echo 'Your Review & Rating Successfully Submitted';
    }else{
        echo '<script>alert("Something went wrong. Please try again");</script>';
        // echo "Error Occured";
    }

}
?>
