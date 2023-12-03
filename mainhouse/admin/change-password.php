<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: login.php");
}
?>

<?php
include 'config/config.php';
$msg = "";
// Code for change password	
if(isset($_POST['change_password']))
	{
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
            $newpassword = mysqli_real_escape_string($conn, md5($_POST['newpassword']));
$username=$_SESSION['AdminLoginId'];
$sql ="SELECT `Admin_Password` FROM `admin` WHERE Admin_Name='$username' AND Admin_Password='$password'";
    $query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0)
{
$con="UPDATE `admin` SET `Admin_Password`='$newpassword' WHERE Admin_Name='$username'";
$chngpwd1 = mysqli_query($conn, $con);
$msg="<div class='alert alert-success'>Your Password succesfully changed</div>";
}
else {
        $msg="<div class='alert alert-danger'>Your current password is not valid.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/navbar-menu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.semanticui.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
     
     <style>
        .dash-widget-header{
            align-items: center;
        display: flex;
        margin-bottom: 15px;
        }
        .dash-widget-icon{
            align-items: center;
        border-radius: 4px;
        color: #fff;
        display: inline-flex;
        font-size: 1.875rem;
        height: 50px;
        justify-content: center;
        line-height: 48px;
        text-align: center;
        width: 50px;
        }
        .container-fluid{
            background: #E4E9F7;
            height: 100vh;
        }
        .col-xl-3{
            margin-bottom: 40px;;
        }
        .col-sm-12{
            margin-left: 10px;
            margin-top: 75px;
        }
        .row{
            width: 100%;
            margin-left: 1px;
        }
        #mak{
            font-size: 25px;
        }
        #example_wrapper{
            padding: 1.5rem;
        }
        .card-header{
            background-color: #fff;
    border-bottom: 1px solid #eaeaea;
        }
        .card-title{
            font-size: 21px;
        }
       </style>
   </head>
<body>
    <?php include 'includes/sidebar.php'; ?>
    <?php include 'includes/header.php'; ?>
					
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Admin</h3>
                    <p></p>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard / Admin</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row" style="margin-top: -68px;">
            <div class="col-sm-12">
                <div class="card">
                <div class="card-header">
					<h4 class="card-title">Change Password</h4>
                </div>
                <?php echo $msg; ?>
                <form method="post" enctype="multipart/form-data" action="">
								<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row" style="margin-bottom: 20px;">
													<label class="col-lg-2 col-form-label">Current Password</label>
													<div class="col-lg-9">
														<input type="password" class="form-control" name="password" id="password" required="" fdprocessedid="allfro" style="width: 60%; font-size: 20px;">
													</div>
												</div>
												<div class="form-group row" style="margin-bottom: 20px;">
													<label class="col-lg-2 col-form-label">New Password</label>
													<div class="col-lg-9">
                                                    <input type="password" class="form-control" name="newpassword" id="newpassword" required="" fdprocessedid="allfro" style="width: 60%; font-size: 20px;">
													</div>
												</div>
												<div class="form-group row" style="margin-bottom: 20px;">
													<label class="col-lg-2 col-form-label">Confirm Password</label>
													<div class="col-lg-9">
                                                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="" fdprocessedid="allfro" style="width: 60%; font-size: 20px;">
													</div>
												</div>
											</div>
										</div>
										<div class="text-left">
											<input type="submit" class="btn btn-primary" name="change_password" value="Save Changes" name="addabout" style="margin-left:200px;" fdprocessedid="sq17m">
										</div>
									
								</div></form>
            </div>
            </div>
        </div>
    </section>














    <script src="https://kit.fontawesome.com/3f1538d59e.js" crossorigin="anonymous"></script>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  <script>
    function menuToggle(){
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active')
    }
</script>

</body>
</html>