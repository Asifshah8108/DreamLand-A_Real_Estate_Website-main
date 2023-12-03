<?php
session_start();
include 'config/config.php';
if (isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL'] == true) {
    $currentUser = $_SESSION['SESSION_EMAIL'];
    $data = "SELECT * FROM users WHERE email = '$currentUser'";
    $gotResults = mysqli_query($conn, $data);
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
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar Start -->
        <?php
        include("includes/navbar.php");
        ?>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To
                        Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 pb-2">“It’s tangible, it’s solid, it’s beautiful. It’s artistic, 
                        from my standpoint, and I just love real estate.”</p>
                    <a href="house-listing.php" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="assets/img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="assets/img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form method="post" action="property-grid.php">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3" name="ptypes">
                                        <option selected>Select Type</option>
                                        <option value="Appartment">Appartment</option>
                                        <option value="Home">Home</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Shop">Shop</option>
                                        <option value="TownHouse">TownHouse</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3" name="btype">
                                        <option selected>Select Status</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control border-0 py-3" name="city" placeholder="Enter City"
                                        style="width: 335px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-dark border-0 w-100 py-3" name="filter">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Types</h1>
                    <p>There are different types of property are listed below:</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=1" type="submit" name="newfilter" value="Appartment">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="assets/img/icon-apartment.png" alt="Icon">
                                    </div>
                                    <h6>Apartment</h6>
                                    <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='appartment'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                                </div>
                            </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=4">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-villa.png" alt="Icon">
                                </div>
                                <h6>Villa</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='villa'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=2">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-house.png" alt="Icon">
                                </div>
                                <h6>Home</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='home'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=7">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-housing.png" alt="Icon">
                                </div>
                                <h6>Office</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='office'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=3">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-building.png" alt="Icon">
                                </div>
                                <h6>Flat</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='flat'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=6">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-neighborhood.png" alt="Icon">
                                </div>
                                <h6>Townhouse</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='townhouse'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=5">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-condominium.png" alt="Icon">
                                </div>
                                <h6>Shop</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='shop'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="http://localhost/mainhouse/filtered.php?property%5B%5D=8">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6>Garage</h6>
                                <span><?php $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE propertytypes.ptypes='garage'";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?> Properties</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="assets/img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                        <p>Our website is said to be #1 Real Estate website because of following reasons:-</p>
                        <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p> -->
                        <p><i class="fa fa-check text-primary me-3"></i>Entire Home: You will have these entire home for you.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clean: This host has committed to staybnb's cleaning process</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Great Location: 90% of recent guests gave the Location a 5 star rating.</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="aboutus.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>Here you can see some featured Recent Property that are available and 
                                you can check the details of property by clicking on them</p>
                            <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                                ipsum sit eirmod sit diam justo sed rebum.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill"
                                    href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php
                            if (isset($_GET['property'])) {
                                $propertychecked = [];
                                $propertychecked = $_GET['property'];
                                foreach ($propertychecked as $propcheck) {
                                    // echo $rowbrand;
                                    $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE ptype IN ($propcheck), t_Id<7 order by rand()";
                                    // $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype  WHERE ptype IN ($propcheck)";
                                    $products_run = mysqli_query($conn, $products);
                                    if (mysqli_num_rows($products_run) > 0) {
                                        foreach ($products_run as $proditems):
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                        <a class="d-block h5 mb-2"
                                            href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                            <?php echo $proditems['pname']; ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?php echo $proditems['plocation']; ?>,
                                            <?php echo $proditems['city']; ?>,
                                            <?php echo $proditems['country']; ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>
                                            <?php echo $proditems['Sqft']; ?> Sqft
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?php echo $proditems['Bedrooms']; ?> Bed
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?php echo $proditems['Bathroom']; ?> Bath
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <?php
                                        endforeach;
                                    }
                                }
                            } else {
                                $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE t_Id<7 order by rand()";
                                // $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype";
                                $products_run = mysqli_query($conn, $products);
                                if (mysqli_num_rows($products_run) > 0) {
                                    foreach ($products_run as $proditems):
                            ?>

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                        <a class="d-block h5 mb-2"
                                            href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                            <?php echo $proditems['pname']; ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?php echo $proditems['plocation']; ?>,
                                            <?php echo $proditems['city']; ?>,
                                            <?php echo $proditems['country']; ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>
                                            <?php echo $proditems['Sqft']; ?> Sqft
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?php echo $proditems['Bedrooms']; ?> Bed
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?php echo $proditems['Bathroom']; ?> Bath
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <?php
                                    endforeach;
                                } else {
                                    echo "No Items Found";
                                }
                            } ?>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="house-listing.php">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <?php
                            if (isset($_GET['property'])) {
                                    $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE btype='sale' AND btype<7";
                                    $products_run = mysqli_query($conn, $products);
                                    if (mysqli_num_rows($products_run) > 0) {
                                        foreach ($products_run as $proditems):
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                        <a class="d-block h5 mb-2"
                                            href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                            <?php echo $proditems['pname']; ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?php echo $proditems['plocation']; ?>,
                                            <?php echo $proditems['city']; ?>,
                                            <?php echo $proditems['country']; ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>
                                            <?php echo $proditems['Sqft']; ?> Sqft
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?php echo $proditems['Bedrooms']; ?> Bed
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?php echo $proditems['Bathroom']; ?> Bath
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <?php
                                        endforeach;
                                    }
                            } else {
                                $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE btype='sale'";
                                // $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype";
                                $products_run = mysqli_query($conn, $products);
                                if (mysqli_num_rows($products_run) > 0) {
                                    foreach ($products_run as $proditems):
                            ?>

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                        <a class="d-block h5 mb-2"
                                            href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                            <?php echo $proditems['pname']; ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?php echo $proditems['plocation']; ?>,
                                            <?php echo $proditems['city']; ?>,
                                            <?php echo $proditems['country']; ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>
                                            <?php echo $proditems['Sqft']; ?> Sqft
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?php echo $proditems['Bedrooms']; ?> Bed
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?php echo $proditems['Bathroom']; ?> Bath
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <?php
                                    endforeach;
                                } else {
                                    echo "No Items Found";
                                }
                            } ?>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="house-listing.php">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <?php
                            if (isset($_GET['property'])) {
                                    $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE btype='rent' AND btype<7";
                                    $products_run = mysqli_query($conn, $products);
                                    if (mysqli_num_rows($products_run) > 0) {
                                        foreach ($products_run as $proditems):
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                        <a class="d-block h5 mb-2"
                                            href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                            <?php echo $proditems['pname']; ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?php echo $proditems['plocation']; ?>,
                                            <?php echo $proditems['city']; ?>,
                                            <?php echo $proditems['country']; ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>
                                            <?php echo $proditems['Sqft']; ?> Sqft
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?php echo $proditems['Bedrooms']; ?> Bed
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?php echo $proditems['Bathroom']; ?> Bath
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <?php
                                        endforeach;
                                    }
                            } else {
                                $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE btype='rent'";
                                // $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype";
                                $products_run = mysqli_query($conn, $products);
                                if (mysqli_num_rows($products_run) > 0) {
                                    foreach ($products_run as $proditems):
                            ?>

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                                        <a class="d-block h5 mb-2"
                                            href="house-details.php?id=<?php echo $proditems['t_Id']; ?>">
                                            <?php echo $proditems['pname']; ?>
                                        </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <?php echo $proditems['plocation']; ?>,
                                            <?php echo $proditems['city']; ?>,
                                            <?php echo $proditems['country']; ?>
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>
                                            <?php echo $proditems['Sqft']; ?> Sqft
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>
                                            <?php echo $proditems['Bedrooms']; ?> Bed
                                        </small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>
                                            <?php echo $proditems['Bathroom']; ?> Bath
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <?php
                                    endforeach;
                                } else {
                                    echo "No Items Found";
                                }
                            } ?>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="house-listing.php">Browse More Property</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="assets/img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>You can contact us anytime. You will be answered and guided correctly. <br>Be free to contact us</p>
                                </div>
                                <a href="tel:+919867049241" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A
                                    Call</a>
                                <a href="aboutus.php?type=about" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get
                                    Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Property Agents</h1>
                <p>This is our official property agents. <br> You can get in touch with them by visiting our Contact Us page
                     </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/img/team-1.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Mehak</h5>
                            <small>Real Estate - Agent</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/img/team-2.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Vivek</h5>
                            <small>Real Estate - Agent</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Swati</h5>
                            <small>Real Estate - Agent</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/img/team-4.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Hatim</h5>
                            <small>Real Estate - Agent</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Clients Say!</h1>
                <p> Here you will get the best property as per your imagination </p>
                <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                    eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Dream House is one of the best website in India and this website is user friendly to use and much more comfortable. 
                            Love to visit again and again. Management are very helpful.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="assets/img/testimonial-1.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Pooja</h6>
                                <small>Artist</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>We find ourselves extremely lucky! I mean knowing a trusted website where i will get and own the property. 
                            Mehak Appartment is one charming luxury property. Loved every inch of the place.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="assets/img/testimonial-2.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Mr. Saifu</h6>
                                <small>Worli Don</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>We found our dream home at Artesia and the team KRC ensured to make our decision a wise choice with their top-notch services. They turned our long dreaded experience into a gratifying one! </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="assets/img/testimonial-3.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Anas</h6>
                                <small>Businessman</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>

</html>