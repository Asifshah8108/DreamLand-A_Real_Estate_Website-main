<?php
include("config/config.php");
$uid = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id = {$uid}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>User Deleted</p>";
	header("Location:userlist.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>User Not Deleted</p>";
	header("Location:userlist.php?msg=$msg");
}
mysqli_close($conn);
?>
