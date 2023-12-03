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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- House Listing Page -->
    <link rel="stylesheet" href="assets/css/house-listing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Profile Page -->
    <link rel="stylesheet" href="assets/css/profile-heading.css">
    <link rel="stylesheet" href="assets/css/profile-card.css">
    <link rel="stylesheet" href="assets/css/vertical-tab.css">
    <link rel="stylesheet" href="assets/css/menu.css">

    <!-- New Links Added for profile drop-down -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!-- Google Api Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />


    <!-- Price Range query -->
  <link rel="stylesheet" href="assets/css/slider.css">
  <link rel="stylesheet" href="assets/css/scrollbar.css">

    <style>
    .result-sorting-wrapper{
    background: #f5f5f5 none repeat scroll 0 0;
    border-bottom: 3px solid #e5e5e5;
    border-left: 4px solid #cecece;
    margin-bottom: 40px;
    overflow: hidden;
    padding: 10px 20px;
}

.sorting-count {
    float: left;
}

.sorting-count p{
    margin: 0 auto;
}
</style>

<style>
    .pagination {
    margin-left: 405px;
    justify-content: center;
    margin-right: 369px;
}

.pagination ul {
    display: flex;
    flex-wrap: wrap;
    background: #fff;
    padding: 8px;
    border-radius: 50px;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
}

.pagination ul li {
    color: #20B2AA;
    list-style: none;
    line-height: 45px;
    text-align: center;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    user-select: none;
    transition: all 0.3s ease;
}

.pagination ul li.numb {
    list-style: none;
    height: 45px;
    width: 45px;
    margin: 0 3px;
    line-height: 45px;
    border-radius: 50%;
}

.pagination ul li.numb.first {
    margin: 0px 3px 0 -5px;
}

.pagination ul li.numb.last {
    margin: 0px -5px 0 3px;
}

.pagination ul li.dots {
    font-size: 22px;
    cursor: default;
}

.pagination ul li.btn {
    padding: 0 20px;
    border-radius: 50px;
}

.pagination li.active,
.pagination ul li.numb:hover,
.pagination ul li:first-child:hover,
.pagination ul li:last-child:hover {
    color: #fff;
    background: #20B2AA;
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

        <div class="list-container">

    <div class="left-col">
        <div class="container-xxl py-5" style="margin-top: -50px;">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Filter Property</h1>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4" style="border-top: 1px solid #ccc;">
                            <?php
                            require('config/config.php');
                            if (isset($_REQUEST['filter'])) 
                            {
                                $ptypes = $_REQUEST['ptypes'];
                                $btype = $_REQUEST['btype'];
                                $city = $_REQUEST['city'];
                                // echo $rowbrand;
                                $products = "SELECT tbl_houses.*,propertytypes.* from tbl_houses join propertytypes WHERE propertytypes.id=tbl_houses.ptype and propertytypes.ptypes='$ptypes' AND btype='$btype' AND city='$city'";
                                $products_run = mysqli_query($conn, $products);
                                if(mysqli_num_rows($products_run)>0) 
                                {
                                    while ($proditems = mysqli_fetch_array($products_run)) 
                                    {
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 50%;">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="house-details.php?id=<?php echo $proditems['t_Id']; ?>"><img class="img-fluid"
                                                    src="houselistImage/<?php echo $proditems['pimg1']; ?>" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                For
                                                <?php echo $proditems['btype']; ?>
                                            </div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                <?php echo $proditems['ptypes']; ?>
                                            </div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">$
                                                <?php echo $proditems['price']; ?>
                                            </h5>
                                            <a class="d-block h5 mb-2" href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                                <?php echo $proditems['pname']; ?>
                                            </a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $proditems['plocation']; ?>, <?php echo $proditems['city']; ?>, <?php echo $proditems['country']; ?></p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-ruler-combined text-primary me-2"></i><?php echo $proditems['Sqft']; ?> Sqft</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i><?php echo $proditems['Bedrooms']; ?> Bed</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i><?php echo $proditems['Bathroom']; ?> Bath</small>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                } else {
                                    echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
                                }
                                } 
                        ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="right-col">
        <div class="installment">
            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4" style="color: var(--theme-secondary-color) !important;">Instalment Calculator</h4>
                <form class="d-inline-block w-100" action="calc.php" method="post" style="margin-top: -15px;">
                <label class="sr-only">Property Amount</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="padding: 12px 0; width: 45px; text-align: center; display: inline-block; color: #a5a5a5;">$</div>
                                        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                        <input type="text" class="form-control" name="amount" placeholder="Property Price" style="position: relative; font-family: var(--theme-ordinary-font); font-size: 15px; height: 50px; border-color: #483c3c; line-height: 35px;">
                                    </div>
                                    <label class="sr-only">Month</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="padding: 12px 0; width: 45px; text-align: center; display: inline-block; color: #a5a5a5;"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="month" placeholder="Duration Year" style="position: relative; font-family: var(--theme-ordinary-font); font-size: 15px; height: 50px; border-color: #483c3c; line-height: 35px;">
                                    </div>
                                    <label class="sr-only">Interest Rate</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="padding: 12px 0; width: 45px; text-align: center; display: inline-block; color: #a5a5a5;">%</div>
                                        </div>
                                        <input type="text" class="form-control" name="interest" placeholder="Interest Rate" style="position: relative; font-family: var(--theme-ordinary-font); font-size: 15px; height: 50px; border-color: #483c3c; line-height: 35px;">
                                    </div>
                                    <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4" style="padding: 0px 23px; font-size: 14px; border-radius: 0; line-height: 46px; font-weight: 500;">Calculate Instalment</button>
                 </form>
            </div>
        </div>
    </div>
    


    <?php

// Advance for Image in admin panel
// // Include the database configuration file
// include 'config/config.php';
// $statusMsg = '';

// // File upload path
// $targetDir = "houselistImage/";
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array($fileType, $allowTypes)){
//         // Upload file to server
//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
//             // Insert image file name into database
//             $insert = $db->query("INSERT into tbl_houses (pimg1, pRegDate) VALUES ('".$fileName."', NOW())");
//             if($insert){
//                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
//             }else{
//                 $statusMsg = "File upload failed, please try again.";
//             } 
//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }

// // Display status message
// echo $statusMsg;
?>

    <!-- Footer Start -->
    <?php include("includes/footer.php"); ?>
    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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

    <!-- Pagination Start -->
<script src="assets/js/pagination.js"></script>
<!-- Pagination End -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

<script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 1000,
      max: 100000,
      values: [ 1000, 100000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> 




</body>
</html>