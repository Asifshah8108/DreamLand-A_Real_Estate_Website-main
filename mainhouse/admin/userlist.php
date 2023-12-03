<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: login.php");
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
                    <h3 class="page-title">User</h3>
                    <p></p>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard / User</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row" style="margin-top: -68px;">
            <div class="col-sm-12">
                <div class="card">
                <div class="card-header">
					<h4 class="card-title">User List</h4>
                </div>
                <?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
										?>
        <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>DOB</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include 'config/config.php';
        $sql = "SELECT * FROM `users`";
	    $query = mysqli_query($conn, $sql);
        // if(mysqli_num_rows($query) > 0)
        // {
        // foreach($query as $result)
        $cnt=1;
        while($result=mysqli_fetch_assoc($query))
        {		
            ?>
            <tr>
                <td><?php echo $cnt ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo $result['Contact No']; ?></td>
                <td><?php echo $result['DOB']; ?></td>
                <td><img src="img/ProfileImage/<?php echo $result['image']; ?>" height="60px" width="60px" style="margin-left: 35px;"></td>
                <td><a href="userdelete.php?id=<?php echo $result['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            <?php
            $cnt=$cnt+1;
        }
        ?>
        </tbody>
    </table>
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