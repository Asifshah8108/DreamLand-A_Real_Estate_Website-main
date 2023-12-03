<?php require("config/config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  
  <div class="container">
    <div class="myform">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="AdminName">
        <input type="password" placeholder="Password" name="AdminPass">
        <button type="submit" name="Login">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="img/image.jpg">
    </div>
  </div>

  <?php

  function input_filter($data)
  {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }

if(isset($_POST['Login']))
{
  #filtering user input
  $AdminName=input_filter($_POST['AdminName']);
  // $AdminPass=input_filter($_POST['AdminPass']);

  #escaping special symbols used in SQL statement
  $AdminName=mysqli_real_escape_string($conn,$AdminName);
  // $AdminPass=mysqli_real_escape_string($conn,$AdminPass);
  $AdminPass = mysqli_real_escape_string($conn, md5($_POST['AdminPass']));

  #query template
  $query="SELECT * FROM `admin` WHERE `Admin_Name` =? AND `Admin_Password` =?";

  #preapered statment
  if($stmt=mysqli_prepare($conn,$query))
{
  mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass); // binding value to template
  mysqli_stmt_execute($stmt); // executing prepared statment
  mysqli_stmt_store_result($stmt); // transfering the result of execution in $stmt
  if(mysqli_stmt_num_rows($stmt)==1)
  {
    session_start();
    $_SESSION['AdminLoginId']=$AdminName;
    header("location: index.php");
  }
  else
  {
    echo"<script>alert('Invalid Admin Name or Password');</script>";
  }
  mysqli_stmt_close($stmt);
}
else
{
  echo"<scirpt>alert('SQL Query cannot be prepared');</script>";
}

}

?>


</body>
</html>