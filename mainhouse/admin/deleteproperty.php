<?php
include("config/config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM `tbl_houses` WHERE t_Id = {$pid}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Property Deleted</p>";
	header("Location:view_property.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Property Not Deleted</p>";
	header("Location:view_property.php?msg=$msg");
}
mysqli_close($conn);
?>
