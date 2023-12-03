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

<style>
    ::selection{
  color: #fff;
  background: #17A2B8;
}
.wrapper{
  width: 300px;
  background: #fff;
  border-radius: 10px;
  padding: 12px 10px 25px;
  /* box-shadow: 0 12px 35px rgba(0,0,0,0.1); */
}
header h2{
  font-size: 20px;
  font-weight: 600;
}
header p{
  margin-top: 5px;
  font-size: 15px;
}
.price-input{
  width: 100%;
  display: flex;
  margin: 25px 0 32px;
}
.price-input .field{
  display: flex;
  width: 135%;
  height: 40px;
  align-items: center;
}
.field input{
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 19px;
  margin-left: 12px;
  border-radius: 5px;
  text-align: center;
  border: 1px solid #999;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.price-input .separator{
  width: 130px;
  display: flex;
  font-size: 22px;
  align-items: center;
  justify-content: center;
}
.slider{
  height: 5px;
  position: relative;
  background: #ddd;
  border-radius: 5px;
}
.slider .progress{
  height: 100%;
  left: 25%;
  right: 25%;
  position: absolute;
  border-radius: 5px;
  background: #17A2B8;
}
.range-input{
  position: relative;
}
.range-input input{
  position: absolute;
  width: 100%;
  height: 5px;
  top: -5px;
  background: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="range"]::-webkit-slider-thumb{
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background: #17A2B8;
  pointer-events: auto;
  -webkit-appearance: none;
  box-shadow: 0 0 6px rgba(0,0,0,0.05);
}
input[type="range"]::-moz-range-thumb{
  height: 17px;
  width: 17px;
  border: none;
  border-radius: 50%;
  background: #17A2B8;
  pointer-events: auto;
  -moz-appearance: none;
  box-shadow: 0 0 6px rgba(0,0,0,0.05);
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
        <div class="result-sorting-wrapper">
                    <div class="sorting-count">
                            <?php 
                            //Query for Listing count
                            $pdo = new PDO("mysql:host=".$servername.";dbname=".$databasename,$username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
                            $sql = "SELECT t_Id FROM `tbl_houses`";
                            $query = $pdo -> prepare($sql);
                            $query->execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=$query->rowCount();
                            ?>
                            <p><span style="margin: 0 auto;"><?php echo "$cnt";?> Listings</span></p>
                    </div>
                    </div>
            <div class="container-xxl py-5" style="margin-top: -50px;">
                <div class="container">
                    <div class="row g-0 gx-5 align-items-end">
                        <div class="col-lg-6">
                            <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                <h1 class="mb-3">Property Listing</h1>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4" style="border-top: 1px solid #ccc;">

                                    <?php
                        if (isset($_GET['property']) && isset($_GET['btype'])) {
                            $propertychecked = [];
                            $propertychecked = $_GET['property'];
                            $btype = $_GET['btype'];
                                        
                            foreach ($propertychecked as $propcheck) {
                                // echo $rowbrand;
                                $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE ptype IN ($propcheck) AND tbl_houses.btype = '$btype'";
                                // $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype  WHERE ptype IN ($propcheck)";
                                $products_run = mysqli_query($conn, $products);
                                if (mysqli_num_rows($products_run) > 0) {
                                    foreach ($products_run as $proditems):
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
                                    endforeach;
                                }
                            }
                                    } 
                                    else if (isset($_GET['property'])) {
                                        $propertychecked = [];
                                        $propertychecked = $_GET['property'];
                                                    
                                        foreach ($propertychecked as $propcheck) {
                                            // echo $rowbrand;
                                            $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE ptype IN ($propcheck)";
                                            // $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype  WHERE ptype IN ($propcheck)";
                                            $products_run = mysqli_query($conn, $products);
                                            if (mysqli_num_rows($products_run) > 0) {
                                                foreach ($products_run as $proditems):
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
                                                endforeach;
                                            }
                                        }
                                                } 
                                    else if (isset($_GET['btype'])){
                                        $btype = $_GET['btype'];
                                $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE tbl_houses.btype = '$btype'";
                                $products_run = mysqli_query($conn, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $items) :
                                        ?>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 50%;">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="house-details.php?id=<?php echo $items['t_Id']; ?>"><img class="img-fluid"
                                                    src="houselistImage/<?php echo $items['pimg1']; ?>" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                For
                                                <?php echo $items['btype']; ?>
                                            </div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                <?php echo $items['ptypes']; ?>
                                            </div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">$
                                                <?php echo $items['price']; ?>
                                            </h5>
                                            <a class="d-block h5 mb-2" href="house-details.php?id=<?php echo $item['t_Id']; ?>">
                                                <?php echo $items['pname']; ?>
                                            </a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $items['plocation']; ?>, <?php echo $items['city']; ?>, <?php echo $items['country']; ?></p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-ruler-combined text-primary me-2"></i><?php echo $items['Sqft']; ?> Sqft</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i><?php echo $items['Bedrooms']; ?> Bed</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i><?php echo $items['Bathroom']; ?> Bath</small>
                                        </div>
                                    </div>
                                </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                                    else{
                                $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype";
                                $products_run = mysqli_query($conn, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $items) :
                                        ?>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 50%;">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="house-details.php?id=<?php echo $items['t_Id']; ?>"><img class="img-fluid"
                                                    src="houselistImage/<?php echo $items['pimg1']; ?>" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                For
                                                <?php echo $items['btype']; ?>
                                            </div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                <?php echo $items['ptypes']; ?>
                                            </div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">$
                                                <?php echo $items['price']; ?>
                                            </h5>
                                            <a class="d-block h5 mb-2" href="house-details.php?id=<?php echo $items['t_Id']; ?>">
                                                <?php echo $items['pname']; ?>
                                            </a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $items['plocation']; ?>, <?php echo $items['city']; ?>, <?php echo $items['country']; ?></p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-ruler-combined text-primary me-2"></i><?php echo $items['Sqft']; ?> Sqft</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i><?php echo $items['Bedrooms']; ?> Bed</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i><?php echo $items['Bathroom']; ?> Bath</small>
                                        </div>
                                    </div>
                                </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        // else if(isset($_GET['btype']))
                        // {
                        //     include 'config/config.php';
                        //     $btype = $_REQUEST['btype'];

                        //     // $query = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype WHERE tbl_houses.price BETWEEN '$startprice' AND '$endprice'";
                        //     $products = "SELECT tbl_houses.*,propertytypes.* from tbl_houses join propertytypes WHERE propertytypes.id=tbl_houses.ptype and tbl_houses.btype='$btype'";
                        // }
                        
                        // else
                        // {
                        //         $products = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype";
                        // }

                        // $products_run = mysqli_query($conn, $products);
                        // if(mysqli_num_rows($products_run) > 0)
                        // {
                        //     foreach($products_run as $items)
                        //     {
                                
                                ?>
                                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 50%;">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="house-details.php?id=<?php //echo $items['t_Id']; ?>"><img class="img-fluid"
                                                    src="houselistImage/<?php //echo $items['pimg1']; ?>" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                For
                                                <?php //echo $items['btype']; ?>
                                            </div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                <?php //echo $items['ptypes']; ?>
                                            </div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">$
                                                <?php //echo $items['price']; ?>
                                            </h5>
                                            <a class="d-block h5 mb-2" href="house-details.php?id=<?php //echo $item['t_Id']; ?>">
                                                <?php //echo $items['pname']; ?>
                                            </a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php //echo $items['plocation']; ?>, <?php echo $items['city']; ?>, <?php echo $items['country']; ?></p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-ruler-combined text-primary me-2"></i><?php //echo $items['Sqft']; ?> Sqft</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i><?php //echo $items['Bedrooms']; ?> Bed</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i><?php //echo $items['Bathroom']; ?> Bath</small>
                                        </div>
                                    </div>
                                </div> -->
                        <?php
                            //     }
                            // } else {
                            //             echo "No Data Found";
                            //         }
                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-col">
            <form action="" method="GET">
                <div class="sidebar">
                    <h2>Select Filters <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                    </h2>
                    <!-- <div class="wrapper">
                        <header>
                            <h2>Price Range</h2>
                            <p>Use slider or enter min and max price</p>
                        </header>
                        <div class="price-input">
                            <div class="field">
                            <span>Min</span>
                            <input type="number" name="start_price" class="input-min" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "1000";} ?>">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                            <span>Max</span>
                            <input type="number" name="end_price" class="input-max" value="<?php if(isset($_GET['end_price'])){echo $_GET['start_price']; }else{echo "10000";} ?>">
                            </div>
                        </div>
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="100000" value="25000" step="100">
                            <input type="range" class="range-max" min="0" max="100000" value="75000" step="100">
                        </div>
                    </div> -->
                    <!-- <p>
                        <label for="amount">Price range:</label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
                    <div id="slider-range"></div> -->

                    <!-- Grid column -->
                    <!-- <div class="col-md-6"> -->

                    <!-- Exaple 1 -->
                    <h4 id="section1" style="margin-top:30px;"><strong>Property Type</strong></h4>

                    <div class="card example-1 scrollbar-ripe-malinka">
                        <div class="list-group">
                            <?php
                                        require('config/config.php');
                                        $property_list = "SELECT * FROM propertytypes";
                                        $property_list_run = mysqli_query($conn, $property_list);

                                        if (mysqli_num_rows($property_list_run) > 0) {
                                            foreach ($property_list_run as $propertylist) {
                                                $checked = [];
                                                if (isset($_GET['property'])) {
                                                    $checked = $_GET['property'];
                                                }
                                        ?>


                            <label class="list-group-item">
                                <a href="house-listing.php?id=<?php echo $propertylist['id']; ?>">
                                    <input class="form-check-input me-1" type="checkbox" name="property[]"
                                        value="<?php echo $propertylist['id']; ?>" <?php
                                        if (in_array($propertylist['id'], $checked)) {
                                                    echo "checked";
                                                } ?>
                                    />
                                    <?= $propertylist['ptypes']; ?>
                                </a>
                            </label>
                            <?php
                                            }
                                        } else {
                                            echo "No House Found";
                                        }
                                                ?>
                        </div>
                    </div>
                    <h4 id="section1" style="margin-top:30px;"><strong>Property Status</strong></h4>

                    <div class="card example-1 scrollbar-ripe-malinka" style="height: auto;">
                        <div class="list-group">
                        <label class="list-group-item">
                                <a href="">
                                    <input class="form-check-input me-1" type="checkbox" name="btype" value="Rent">
                                    Rent</a>
                        </label>
                        <label class="list-group-item">
                                <a href="">
                                    <input class="form-check-input me-1" type="checkbox" name="btype" value="Sale">
                                    Sale</a>
                        </label>
                        </div>
                    </div>
                    
                    




                    <!-- <h4 id="section1" style="margin-top:30px;"><strong>Amenities</strong></h4>
                                <div class="card example-1 scrollbar-ripe-malinka" style="height: 155px;">
                                        
                                        <div class="list-group">
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Air Conditioning
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Wifi
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Gym
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Pool
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Garage
                                            </label>
                                        </div>
                                </div> -->

                    <div class="sidebar-link">
                        <a href="house-listing.php">Clear Filter</a>
                    </div>
                </div>
            </form>
            <div class="installment">
            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4" style="color: var(--theme-secondary-color) !important;">Instalment Calculator</h4>
                <form class="d-inline-block w-100" action="calc.php" method="post" style="margin-top: -15px;">
                <label class="sr-only">Property Amount</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="padding: 12px 0; width: 45px; text-align: center; display: inline-block; color: #a5a5a5;">$</div>
                                        </div>
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

        <div class="pagination">
            <ul> <!--pages or li are comes from javascript --> </ul>
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


</body>
</html>