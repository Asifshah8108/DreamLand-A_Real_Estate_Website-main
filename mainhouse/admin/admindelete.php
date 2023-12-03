<?php
include("config/config.php");
$aid = $_GET['id'];
$sql = "DELETE FROM `admin` WHERE `admin_id` = {$aid}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Admin Deleted</p>";
	header("Location:adminlist.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Admin Not Deleted</p>";
	header("Location:adminlist.php?msg=$msg");
}
mysqli_close($conn);
?>
