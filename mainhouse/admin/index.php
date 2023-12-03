<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: login.php");
}
?>
<?php
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/navbar-menu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       </style>
   </head>
<body>
    <?php include 'includes/sidebar.php'; ?>
    <?php include 'includes/header.php'; ?>
					
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Admin!</h3>
                    <p></p>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fa-solid fa-users" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                            <h3><?php $sql = "SELECT id FROM users";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">Registered Users</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-success">
                                <i class="fa-solid fa-users" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT admin_id FROM admin";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">Admin</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-danger">
                                <i class="fa-solid fa-user" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT t_Id FROM tbl_houses";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">Properties</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-info">
                                <i class="fa-solid fa-house" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='Appartment'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No of Appartment</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-warning">
                                <i class="fa-solid fa-table" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='home'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of Houses</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-info">
                                <i class="fa-solid fa-house" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='villa'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of Villa</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-secondary" id="mak">
                                <i class="fa-sharp fa-solid fa-building"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='flat'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of Flat</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fa-solid fa-tablet" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='TownHouse'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of TownHouse</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fa-solid fa-tablet" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='shop'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of Shop</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fa-solid fa-tablet" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='office'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of Office</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fa-solid fa-tablet" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='garage'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">No. of Garage</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-success">
                                <i class="fa-solid fa-quote-left" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE btype='sale'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">On Sale</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-info">
                                <i class="fa-solid fa-quote-right" id="mak"></i>
                            </span>
                            
                        </div>
                        <div class="dash-widget-info">
                            
                        <h3><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE btype='rent'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
                            
                            <h6 class="text-muted">Rentals</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12 col-lg-6">
            
                
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Sales Overview</h4>
                    </div>
                    <div class="card-body">
                        <div id="morrisArea"></div>
                    </div>
                </div>
                
                
            </div>
            <div class="col-md-12 col-lg-6">
            
                
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Order Status</h4>
                    </div>
                    <div class="card-body">
                        <div id="morrisLine"></div>
                    </div>
                </div>
                
                
            </div>	
        </div> -->
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