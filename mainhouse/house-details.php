<?php
    session_start();
    include 'config/config.php';
    if(isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL']==true){
        $currentUser = $_SESSION['SESSION_EMAIL'];
        $data = "SELECT * FROM users WHERE email = '$currentUser'";
        $gotResults = mysqli_query($conn,$data);
        // $user = mysqli_fetch_array($gotResults);   
    }
error_reporting(0);
?>

<?php
$data = "SELECT * FROM users";
$gotResults = mysqli_query($conn,$data);
$user = mysqli_fetch_array($gotResults);
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

    <script src="assets/js/sweetalert.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet">

    <!-- Review System -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/newreview.css">
    <!-- <link rel="stylesheet" href="assets/css/review.css"> -->

    <!-- House Details page -->
    <link rel="stylesheet" href="assets/css/house-details.css">
    <link rel="stylesheet" href="assets/css/navtab.css">
    <link rel="stylesheet" href="assets/css/favourite.css">

      <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->

    <!-- New Links Added for profile drop-down -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <style>
        .check-form{
            margin-left: 75%;
            margin-top: -53px;
            padding: 0;
        }
        .tablebody tr td{
            border: 1px solid #cccccc;
            padding: 18px;
            width: 75%;
        }
        .table .table-light th{
            text-transform: uppercase;
            font-weight: 900;
            color: #111;
            border: 1px solid #cccccc;
            padding: 18px;
            text-align: left;
            background: #eee;
        }
        .secciones #tab2{
            background: #fff;
        }
        .secciones #tab3{
            background: #fff;
        }
        .wrap{
            margin-top: 150px;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar Start -->
        <?php
        include("includes/navbar.php");
                $id = "";
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                }
                

                $sql = "SELECT tbl_houses.*, propertytypes.ptypes FROM tbl_houses JOIN propertytypes ON propertytypes.id=tbl_houses.ptype WHERE t_Id = $id";
                $result = mysqli_query($conn, $sql);

        ?>
        <!-- Navbar End -->

        <?php
                if (mysqli_num_rows($result) > 0) {
                    // while($row = $result->fetch_assoc()){
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sql_check = "SELECT * FROM saved WHERE userEmail = '{$_SESSION['SESSION_EMAIL']}'";
                        $result_check = mysqli_query($conn, $sql_check);
                        
        ?>
<div class="house-title">
    <div>
    <?php
            if(mysqli_num_rows($result_check) > 0){
         ?>
         <a href="includes/save_send.php?id=<?php echo $_GET['id'] ?>" class="btn btn-primary" style="margin-left: 90%;
    margin-top: -59px;
    margin-bottom: -220px;
    background: white;" onclick="alert('Houses already exist in saved list')"><i class="far fa-heart" style="color: red;font-size: 35px;"></i></a> 
    <?php
            }else if (isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL'] == true) { 
         ?>
    <a href="includes/save_send.php?id=<?php echo $_GET['id'] ?>" class="btn btn-primary" style="margin-left: 90%;
    margin-top: -59px;
    margin-bottom: -220px;
    background: white;" onclick="alert('Add to Saved Property')"><i class="far fa-heart" style="color: red;font-size: 35px;"></i></a> 
    <?php
            } else{?>
                <a href="includes/save_send.php?id=<?php echo $_GET['id'] ?>" class="btn btn-primary" style="margin-left: 90%;
                margin-top: -59px;
                margin-bottom: -220px;
                background: white;" onclick="alert('Login First to Save Property')"><i class="far fa-heart" style="color: red;font-size: 35px;"></i></a> 
           <?php }
         ?>
    </div>
    <!-- <h1>My Sweet House</h1> -->
    <!-- <div class="parent">
        <div class="child">

        <input type="checkbox" checked="checked" id="favorite" name="favorite-checkbox" value="favorite-button">
        <label for="favorite" class="container">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"> 
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
            <div class="action">
                <a href="includes/save_send.php?id=<?//php echo $_GET['id'] ?>" style="margin-top: -20px;"><span class="option-2">Added to Favorites</span></a>
                <a><span class="option-1">Add to Favorites</span></a>
                
            </div>
        </label>
        </div> -->
        
        <!-- </div> -->
    <?php echo " <h1>" . $row['pname'] . " </h1>"; ?>
    <div class="row">
        <div style="width: 90%;">
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-sharp fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i>
            <span>254 Reviews</span>
        </div>
        <div>
            <!-- <p>Location: San Franciso, California, United States</p> -->
            <?php echo " <p>Location: " . $row['plocation'] . ", " . $row['city'] . ", " . $row['country'] . "</p>"; ?>
        </div>
    </div>
</div> 
<div class="gallery">
    <div class="gallery-img-1"><img src="houselistImage/<?php echo $row['pimg1']; ?>"></div>
    <div><img src="houselistImage/<?php echo $row['pimg2']; ?>"></div>
    <div><img src="houselistImage/<?php echo $row['pimg3']; ?>"></div>
    <div><img src="houselistImage/<?php echo $row['pimg4']; ?>"></div>
    <div><img src="houselistImage/<?php echo $row['pimg5']; ?>"></div>
</div>
<div class="small-details">
    <h2>Entire rental unit hosted by Brandon</h2>
    <p>2 guest &nbsp; &nbsp; 2 beds &nbsp; &nbsp; 1 bathroom</p>
    <!-- <h4>$ 100 / day</h4> -->
    <?php echo " <h4>$ " . $row['price'] . "</h4>"; ?>
</div>

<hr class="line">
<!-- <div class="parent">
    <div class="child">

      <input type="checkbox" checked="checked" id="favorite" name="favorite-checkbox" value="favorite-button">
      <label for="favorite" class="container">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"> 
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
        </svg>

        <div class="action">
          <span class="option-1">Add to Favorites</span>
          <span class="option-2">Added to Favorites</span>
        </div>

      </label>
    </div>
  </div> -->
<form class="check-form" method="post">
    <button name="checker">Check Availability</button>
    <?php
                        if (isset($_POST['checker'])) {
                            if ($row['availabilty'] == 1) {
                                echo '<script type="text/javascript">swal("Available.","Room is Available","success")</script>';
                            } else {
                                echo '<script type="text/javascript">swal("Available Not","Room is Not Available","error")</script>';
                            }
                        } ?>
</form>

<ul class="details-list">
    <li><i class="fa-solid fa-house"></i>Entire Home
        <span>You will have thw wntire flat for you.</span>
    </li>
    <li><i class="fa-solid fa-paintbrush"></i>Entire Clean
        <span>This host has committef to staybnb's cleaning process.</span>
    </li>
    <li><i class="fa-solid fa-location-dot"></i>Great Location
        <span>90% of recent guests gave the Location a 5 star rating.</span>
    </li>
    <li><i class="fa-solid fa-heart"></i>Great Check-in Experience
        <span>100% of recent guests gave the check-in process a 5 star rating.</span>
    </li>

    <!--Side-Bar-->
    <aside class="col-md-3" style="float: right;margin-top: -310px;">
<div class="sidebar_widget" style="border: 1px solid #e6e6e6; margin: 0 auto 40px; padding: 20px 16px 30px; position: relative;">
  <div class="widget_heading" style="margin-bottom:15px;">
    <h5><i class="fa fa-envelope" aria-hidden="true"></i> Request a Showing</h5>
  </div>
  <form method="post">
    <div class="form-group" style="margin-bottom: 15px;">
      <input type="text" class="form-control" name="Name" placeholder="Your Name" required style="width:95%";>
    </div>
    <div class="form-group" style="margin-bottom: 15px;">
      <input type="phone" class="form-control" name="PhoneNo" placeholder="Phone Number" required style="width:95%";>
    </div>
    <div class="form-group" style="margin-bottom: 15px;">
      <input type="email" class="form-control" name="Email" placeholder="Your Email" required style="width:95%";>
    </div>
    <div class="form-group" style="margin-bottom: 15px;">
      <textarea rows="4" class="form-control" name="Message" placeholder="Message" required style="width:95%";></textarea>
    </div>
    <?php
                        // if($_SESSION['SESSION_EMAIL'])
                        if (isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL'] == true) { ?>
      <div class="form-group" style="margin-left: 40px;">
        <!-- <a class="btn btn-primary py-3 px-5" href="" name="booking_submit" type="submit">Send Message</a> -->
        <button type="submit" class="btn btn-primary py-3 px-5" name="booking_submit">Send Message</button>
      </div>
      <?php
                        } else { ?>
      <a href="includes/login.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal" style="background-color: #49a3ff;">Login For Book</a>

      <?php
                        } ?>
  </form>
</div>
</aside>
<!--/Side-Bar--> 
</ul>
<hr class="line">

<p class="home-desc">
<?php echo $row['description']; ?>
</p>
<hr class="line">



<!-- Special Addition Nav Tab Start -->

<div class="wrap" style="border: 1px solid #555555;">
    <ul class="tabs" style="padding-top: 8px;">
        <!-- <li><a href="#tab1"><span class="fa fa-home"></span><span class="tab-text">Home</span></a></li> -->
        <li style="margin: 0 auto 5px;"><a href="#tab2" style="padding: 18px 10px 20px 5px;"><span class="fa fa-group"></span><span class="tab-text">Details</span></a></li>
        <li style="margin: 0 auto 5px;"><a href="#tab3" style="padding: 18px 10px 20px 5px;"><span class="fa fa-briefcase"></span><span class="tab-text">Amenities</span></a></li>
    </ul>

    <div class="secciones">
        <article id="tab2">
            <!-- <h1>Details</h1> -->
            <table class="table">
    <thead class="table-light">
        <tr>
            <th colspan="2">Details</th>
        </tr>
    </thead>
    <tbody class="tablebody">
        <tr>
            <td>Country:</td>
            <td><?php echo $row['country']; ?></td>
        </tr>
        <tr>
            <td>Property Type:</td>
            <td><?php echo $row['ptypes']; ?></td>
        </tr>
        <tr>
            <td>Floor:</td>
            <td><?php echo $row['floorno']; ?> floor</td>
        </tr>
        <tr>
            <td>Property Age:</td>
            <td><?php echo $row['pAge']; ?> years</td>
        </tr>
        <tr>
            <td>State:</td>
            <td><?php echo $row['state']; ?></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><?php echo $row['city']; ?></td>
        </tr>
        <tr>
            <td>Estimated Price:</td>
            <td>Rs. <?php echo $row['price']; ?></td>
        </tr>
        <tr>
            <td>Total Rooms:</td>
            <td><?php echo $row['totalroom']; ?></td>
        </tr>
        <tr>
            <td>Bedrooms:</td>
            <td><?php echo $row['Bedrooms']; ?></td>
        </tr>
        <tr>
            <td>Living Room:</td>
            <td><?php echo $row['LivingRoom']; ?></td>
        </tr>
        <tr>
            <td>Kitchen:</td>
            <td><?php echo $row['Kitchen']; ?></td>
        </tr>
        <tr>
            <td>Bathroom:</td>
            <td><?php echo $row['Bathroom']; ?></td>
        </tr>
    </tbody>
</table>
        </article>
        <article id="tab3">
            <!-- <h1>Amenities</h1> -->
            <table class="table">
    <thead class="table-light">
        <tr>
            <!-- <th scope="col">Details</th> -->
            <th colspan="2">Amenities</th>
        </tr>
    </thead>
    <tbody class="tablebody">
    <tr>
                               <td>Surveillance cameras</td>
                                <?php if ($row['cameras'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
        <tr>
                                <td>Elevator</td>
                                <?php if ($row['elevator'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
        <tr>
                                <td>Air Conditioner</td>
                                <?php if ($row['airconditioner'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                                <td>Wifi</td>
                                <?php if ($row['wifi'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                                <td>Pool</td>
                                <?php if ($row['pool'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                                <td>Gym</td>
                                <?php if ($row['gym'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                               <td>Balcony</td>
                                <?php if ($row['balcony'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                               <td>Parks</td>
                                <?php if ($row['parks'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                               <td>Clubhouse</td>
                                <?php if ($row['clubhouse'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               <tr>
                               <td>Dog Park</td>
                                <?php if ($row['dogpark'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
                               
                               <tr>
                                <td>Garage</td>
                                <?php if ($row['garage'] == 1) {
                                ?>
                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                  <?php
                        } else { ?> 
                                 <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                 <?php
                        } ?> </tr>
    </tbody>
</table>
        </article>
    </div>
</div>


        <?php

                    }
                }

?>

<!-- Special Addition Nav Tab End -->


<div class="map">
    <h3>Location on Map</h3>
    <?php  
    include 'config/config.php';
    $id = "";
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
    }
    
    // $sql = "SELECT * FROM tbl_houses WHERE id = $id";
    $sql = "SELECT tbl_houses.*,propertytypes.ptypes,propertytypes.id as bid from tbl_houses join propertytypes on propertytypes.id=tbl_houses.ptype where tbl_houses.t_Id= $id";
    $result = $conn->query($sql);
    $res = $result->fetch_assoc();
        if( $res['location_url'] == true)
        {
        echo $res['location_url'];
        echo "<b>" .$res['plocation'] .", " .$res['city'] .", " .$res['country'] ."</b>";
        }else {
        echo '
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30695922.013225425!2d64.44757036482669!3d20.08974543066478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1672332222093!5m2!1sen!2sin" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        echo "<b>" .$res['plocation'] .", " .$res['city'] .", " .$res['country'] ."</b>";
        }

       ?>
    <p>It's a like a home away from home.</p>
</div>

<!-- <div class="map">
    <h3>Location on Map</h3>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100940.17073736785!2d-122.507640085432!3d37.75767927557254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1669140272935!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <b>San Fransico, California, United States</b>
    <p>It's a like a home away from home.</p>
</div> -->

<hr class="line">

<div class="host">
    <img src="assets/img/Staybnb-img/images/host.png">
    <div>
        <h2>Host by Brandon</h2>
        <i class="fa-sharp fa-solid fa-star"></i>
        <i class="fa-sharp fa-solid fa-star"></i>
        <i class="fa-sharp fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        <span>&nbsp; &nbsp; 245 reviews &nbsp; &nbsp; Response rate 100% &nbsp; &nbsp; &nbsp; Response time: 60
            min</span>
    </div>
</div>
<a href="#" class="contact-host">Contact Host</a>



<!-- House Details -->


<!-- Review Slider Start -->

    <!-- Button trigger modal -->


<section class="features" id="features">
    <h1 class="heading"> Customer's <span>Review</span> </h1>
</section>

<!-- review section starts  -->

<section class="review">

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

                    <?php
                        // $id = $user["id"];
                        // $name = $user["name"];
                        // $image = $user["image"];
                        // $star_fetch = "SELECT tbl_review.*,tbl_houses.t_Id,users.image FROM `tbl_review` JOIN tbl_houses ON tbl_houses.t_Id=$id JOIN users ON users.image='$image' WHERE hid='$id'";
                        $star_fetch = "SELECT * FROM `tbl_review` WHERE hid='$id'";
                        $staru = mysqli_query($conn,$star_fetch);
                        if(mysqli_num_rows($staru)>0)
                        {
                            foreach($staru as $star)
                            {              
                        ?>
            <div class="swiper-slide box">
                <!-- <img src="ProfileImage/<?php //echo $star['image']; ?>" alt=""> -->
                <img src="ProfileImage/temp.png" alt="">
                <p><?php echo $star['user_review']; ?></p>
                <h3><?php echo $star['user_name']; ?></h3>
                <div class="stars">
                <?php
                            if($star["user_rating"] == '5')
                            {
                                echo "
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                ";
                            }

                            if($star["user_rating"] == '4')
                            {
                                echo "
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                ";
                            }

                            if($star["user_rating"] == '3')
                            {
                                echo "
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                ";
                            }

                            if($star["user_rating"] == '2')
                            {
                                echo "
                                <i class='fas fa-star'></i>
                                <i class='fas fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                ";
                            }

                            if($star["user_rating"] == '1')
                            {
                                echo "
                                <i class='fas fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                ";
                            }
                            ?>
                </div>
            </div>

            <?php
                            }
                        }
                        ?>

        </div>

    </div>

</section>

<!-- review section ends -->

<?php
if (isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL'] == true) { ?>
      <h2>Write Your Review</h2>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 24%;
    margin-top: -78px;">
  Review
</button>
      <?php
                        } ?>
<!-- <h2>Write Your Review</h2>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 24%;
    margin-top: -78px;">
  Review
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Submit Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <h4 class="text-center mt-2 mb-4">
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
            </h4>
            <div class="form-group">
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" style="width: 100%;"/>
            </div>
            <div class="form-group">
                <input type="number" name="hid" id="hid" class="form-control" value="<?php echo $id ?>" disabled style="width: 0; height: 0;"/>
            </div>
            <div class="form-group" style="display: none;">
                <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here" style="margin-top: 15px; width: 100%;"></textarea>
            </div>
            <div class="form-group text-center mt-4">
                <a href=""><button type="submit" class="btn btn-primary" id="save_review" name="rating_data" onclick="alert('Your Review & Rating Successfully Submitted.')">Submit</button></a>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<!-- Review Slider End -->


    <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>Here you can see some featured Recent Property that are available and 
                                you can check the details of property by clicking on them</p>
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
                                <a class="btn btn-primary py-3 px-5" href="house-listing.html">Browse More Property</a>
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

    <!-- NewReview System -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});
</script>
        <!-- Nav Tab JS Start-->
<script>
    $(document).ready(function () {
        $('ul.tabs li a:first').addClass('active');
        $('.secciones article').hide();
        $('.secciones article:first').show();

        $('ul.tabs li a').click(function () {
            $('ul.tabs li a').removeClass('active');
            $(this).addClass('active');
            $('.secciones article').hide();

            var activeTab = $(this).attr('href');
            $(activeTab).show();
            return false;
        });
    });
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

 <!-- Template Javascript -->
 <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/star.js"></script>

<!-- Nav Tab JS End-->
    </body>
    </html>

    <?php
include 'config/config.php';
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
    $mvp = "SELECT pname FROM `tbl_houses` WHERE t_Id=$id";
    $gotResults = mysqli_query($conn,$mvp);
    $name = mysqli_fetch_assoc($gotResults);

$sql = "SELECT * FROM tbl_houses WHERE t_Id = $id";
if(isset($_POST['booking_submit']))
{
$bkid = $_GET['id'];
$Name = $_POST['Name'];
$PhoneNo = $_POST['PhoneNo'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$useremail = $_SESSION['SESSION_EMAIL'];
        $hname = $name['pname'];
$requestNo = mt_rand(100000000, 999999999);
        
    $qrt = "INSERT INTO `tbl_bookings`(`requestNo`, `useremail` ,`bkid`,`houseName`, `Name`, `PhoneNo`, `Email`, `Message`) VALUES ('$requestNo','$useremail','$bkid','$hname','$Name','$PhoneNo','$Email','$Message')";
    $qry_run = mysqli_query($conn, $qrt);
    if($qry_run)
    {
        // echo "<script>alert('Booked successfuly.');</script>";
        echo '<script type="text/javascript">swal("Your Request has been sent successfully.","","success")</script>';
    //   echo "<script type='text/javascript'> document.location = 'house-details.php'; </script>";
    }else{
        // echo "<script>alert('Something went wrong. Please try again');</script>";
        echo '<script type="text/javascript">swal("Something went wrong.","Please try again","error")</script>';
    //   echo "<script type='text/javascript'> document.location = 'house-details.php'; </script>";
    }
}
?>