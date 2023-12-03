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

<?php 

// codeing

if(isset($_REQUEST['calc']))
{
	$amount=$_REQUEST['amount'];
	$mon=$_REQUEST['month'];
	$int=$_REQUEST['interest'];
	
	$interest = $amount * $int/100;
	$pay = $amount + $interest;
	$month = $pay / $mon;

}	
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Google Api Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet">

    <!-- New Links Added for profile drop-down -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <style>
        .bg-secondary th{
            padding: 20px;
        }

        .text-center td{
            padding: 20px;
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




<!--	Submit property   -->
<div class="full-row bg-gray">
            <div class="container">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                        </div>
					</div>
					<center style="padding-left: 250px; padding-right: 250px;">
                        <table class="table" style="border-collapse:inherit;">
                            <thead class="table-dark">
                                <tr  class="bg-secondary">
                                    <th class="text-white font-weight-bolder" style="text-align: center;">Term</th>
                                    <th class="text-white font-weight-bolder" style="text-align: center;">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            
                                <tr class="text-center">
                                    <td class="table-light"><b>Amount</b></td>
                                    <td class="table-light"><b><?php echo '$'.$amount ; ?></b></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="table-light"><b>Total Duration</b></td>
                                    <td class="table-light"><b><?php echo $mon.' Months' ; ?></b></td>
                                </tr><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                <tr class="text-center">
                                    <td class="table-light"><b>Interest Rate</b></td>
                                    <td class="table-light"><b><?php echo $int.'%' ; ?></b></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="table-light"><b>Total Interest</b></td>
                                    <td class="table-light"><b><?php echo '$'.$interest ; ?></b></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="table-light"><b>Total Amount</b></td>
                                    <td class="table-light"><b><?php echo '$'.$pay ; ?></b></td>
                                </tr>
                                <tr class="text-center">
                                    <td class="table-light"><b>Pay Per Month (EMI)</b></td>
                                    <td class="table-light"><b><?php echo '$'.$month ; ?></b></td>
                                </tr>
                                
                            </tbody>
                        </table> 
				    </center>
            </div>
        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
	<!--	Submit property   -->


     <!-- Footer Start -->
    <?php include("includes/footer.php"); ?>
    <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>


    <!-- House Details Page -->
    <script src="https://kit.fontawesome.com/3f1538d59e.js" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>

</html>