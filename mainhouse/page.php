<?php
    session_start();
    include 'config/config.php';
    if(isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL']==true){
        $currentUser = $_SESSION['SESSION_EMAIL'];
        $data = "SELECT * FROM users WHERE email = '$currentUser'";
        $gotResults = mysqli_query($conn,$data);
        $user = mysqli_fetch_array($gotResults);   
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- New Links Added for profile drop-down -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!-- Google Api Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Profile Page -->
    <link rel="stylesheet" href="assets/css/profile-heading.css">
    <link rel="stylesheet" href="assets/css/profile-card.css">
    <link rel="stylesheet" href="assets/css/vertical-tab.css">
    <link rel="stylesheet" href="assets/css/menu.css">

    
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <style>
        /*--------------
  16.2. my-vehicles
  -------------------------*/

  .my_vehicles_list ul.vehicle_listing {
    padding:0px;
    margin:0 0 50px;
  }
  .my_vehicles_list ul.vehicle_listing li {
    list-style:none;
    border-bottom:#e6e6e6 solid 1px;
    padding:14px 0 22px;
    overflow:hidden;
    position:relative;
  }
  .vehicle_img {
    float: left;
    margin-right: 22px;
    width: 22%;
  }
  .vehicle_img img {
    max-width:100%;
  }
  .my_vehicles_list ul.vehicle_listing li a {
    color:#111;
  }
  .vehicle_title {
    float: left;
    padding: 12px 0;
    width: 40%;
  }
  .vehicle_status {
    float: right;
    text-align: right;
    width: 25%;
  }
  .vehicle_status a i {
    margin:10px 0 0 8px;
    color:#555;
    font-size:18px
  }
  .deactive_vehicle {
    opacity: 0.3;
  }
  .deactive_vehicle:after {
    position:absolute;
    bottom:0px;
    left:0px;
    right:0px;
    width:100%;
    content:"";
    border-bottom:#909090 solid 1px;
  }
  .my_vehicles_list ul.vehicle_listing li .btn:hover {
    color:#fff;
  }

    </style>
    <style>
        .btn-uploader{
            text-decoration: none;
    padding: 9px;
    margin: 20px;
    background-color: rebeccapurple;
    border: 2px solid transparent;
    color: white;
    border-radius: 8px;
    transition: .3s all ease;
        }

        .container{
            
        }
        .section-header p{
            font-family: 'Lato', sans-serif;
            line-height: 26px;
    font-weight: 400;
    margin-bottom: 15px;
    font-size: 14px;
        }
        .section-header p a{
            color: #fa2837;
    fill: #fa2837;
        }
    </style>
    
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar Start -->
        <?php
        include("includes/navbar.php");
        ?>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div>
        <?php
        $pagetype = $_GET['type'];
        $term = "SELECT * FROM `page` WHERE type='$pagetype'";
        $results = mysqli_query($conn, $term);
        if(mysqli_num_rows($results) > 0)
        {
            foreach($results as $page)
            {
                ?>

                <section class="page-header profile_page">
                    <div class="container">
                        <div class="page-header_wrap">
                            <div class="page-heading">
                                <h1><?php echo $page['pageName']; ?></h1>
                            </div>
                        </div>
                    </div>
                    <!-- Dark Overlay-->
                    <div class="dark-overlay"></div>
                </section>
                <!-- Page Header end -->

                <section class="about_us section-padding">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2><?php //echo $page['pageName']; ?></h2>
                            <p><?php echo $page['detail']; ?></p>
                        </div>
                    </div>
                </section>

                <?php
            }
        }
        ?>
        </div>

        

        

    <!-- Footer Start -->
    <?php include("includes/footer.php"); ?>
    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

        <script type="text/javascript">
            document.getElementById("image").onchange = function () {
                document.getElementById("form").submit();
            };
        </script>
        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
<script src="assets/js/main.js"></script>

<!-- House Details Page -->
<script src="https://kit.fontawesome.com/3f1538d59e.js" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

</body>

</html>