<?php
include("config/config.php");
$cid = $_GET['id'];
$sql = "DELETE FROM `contact` WHERE id = {$cid}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Contact Deleted</p>";
	header("Location:contactlist.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Contact Not Deleted</p>";
	header("Location:contactlist.php?msg=$msg");
}
mysqli_close($conn);
?>
