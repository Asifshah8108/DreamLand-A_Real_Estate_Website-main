<?php
    session_start();

    include 'config/config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    $query1 = mysqli_query($conn, "SELECT * FROM users");
    
    $row = mysqli_fetch_assoc($query);
    $row1 = mysqli_fetch_assoc($query1);

?>

<?php
require 'config/config.php';
$currentUser = $_SESSION['SESSION_EMAIL'];
$data = "SELECT * FROM users WHERE email = '$currentUser'";
$gotResults = mysqli_query($conn,$data);
// $_SESSION["id"] = 1; // User's session
// $sessionId = $currentUser["email"];
// $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE email = $gotResults"));
$user = mysqli_fetch_array($gotResults)
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
        <section class="page-header profile_page">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-heading">
                        <h1>Your Profile</h1>
                    </div>
                </div>
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>
        </section>
        <!-- Page Header end -->


        <!-- Profile Card Start -->



        <div class="container_profile">
            <div class="card-template card-template-1">
                <div class="left-part">
                    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
                        <div class="upload">
                            <?php
            echo "
            <span>" . $user['name'] . "</span>";
            ?>
                            <!-- <span>John</span> -->
                            <?php
                $id = $user["id"];
                $name = $user["name"];
                $image = $user["image"];
                
                            // <!-- <img alt="left-circular-image" src="img/undraw_male_avatar.png" width="100%" /> -->
                            
                            if($image>'0')
                            {
                                echo "<img src='ProfileImage/$image' style='width='125px;' height='125px;' title=' $image; '>";
                            }
                            else
                            {
                                echo "<img src='ProfileImage/temp.png' style='width='125px;' height='125px;' title='image'>";
                            }
                            ?>
                            <!-- <img src="ProfileImage/<?php // echo $image; ?>" width=125 height=125
                                title="<?php // echo $image; ?>"> -->
                            <div class="round">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                                <i class="fa fa-camera" style="color: #fff;"></i>
                            </div>
                        </div>
                    </form>
                    <div class="social-profiles">
                        <a href="https://facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>
                        <a href="https://twitter.com/"><i class="fa fa-twitter-square fa-2x"></i></a>
                        <a href="https://linkedin.com/"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </div>
                </div>
                <div class="right-part">
                    <?php
        echo "
            <h1 class='text-center orig-font'>" . $user['name'] . "</h1>";
        ?>
                    <!-- <h1 class="text-center orig-font">John Doe</h1> -->
                    <p class="magix">
                        <?php
                // $row1 = mysqli_fetch_assoc($query1);
                
                echo " <p> Contact No:- " . $user['Contact No'] . " </p>";
                echo " <p> DOB:- " . $user['DOB'] . " <br>";
                echo " <p> Address:- " . $user['Address'] . " <br>";
                echo " <p> City:- " . $user['City'] . " <br>";
                echo " <p> Country:- " . $user['Country'] . " <br>";
                ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Profile Card End -->

        <!-- Vertical Tab Start -->

        <div class="container-vertical-tab">
            <div class="wrapper-tab">
                <ul class="indicator">
                    <li class="active_tab" data-target="#home"><i class="ph-house"></i> Profile Settings</li>
                    <li data-target="#profile"><i class="ph-user-circle"></i> Update Password</li>
                    <li href="" data-target="#contact"><i class="fas fa-calendar-check"></i> My Bookings</li>
                    <a href="logout.php">
                        <li data-target="#settings"><i class="ph-gear-six"></i> Sign Out</li>
                    </a>
                </ul>
                <ul class="content">
                    <li class="active_tab" id="home">
                        <h1>Profile Settings</h1>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label">Reg Date -</label>
                                <?php
                        echo "
                            " . $row1['RegDate'] . "";
                        ?>
                                <!-- 2017-06-18 01:33:36 -->
                            </div>
                            <div class="form-group">
                                <label class="control-label">Last Update at -</label>
                                <?php
                        echo "
                            " . $row1['UpdationDate'] . "";
                        ?>
                                <!-- 2017-06-27 00:48:14 -->
                            </div>
                            <div class="form-group">
                                <label class="control-label">Full Name</label>
                                <input class="form-control white_bg" name="name" value="" id="fullname" type="text"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email Address</label>
                                <input class="form-control white_bg" value="<?php echo "" . $row['email'] . ""; ?>"
                                    name="emailid" id="email" type="email" required="" readonly="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone Number</label>
                                <input class="form-control white_bg" name="ContactNo" value="" id="phone-number"
                                    type="text" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date of Birth&nbsp;(dd/mm/yyyy)</label>
                                <input class="form-control white_bg" value="" name="DOB" placeholder="dd/mm/yyyy"
                                    id="birth-date" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Your Address</label>
                                <textarea class="form-control white_bg" name="Address" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <input class="form-control white_bg" id="country" name="Country" value="" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">City</label>
                                <input class="form-control white_bg" id="city" name="City" value="" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-uploader" name="upload">Save Changes <span
                                        class="angle_arrow"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span></button>
                            </div>
                        </form>
                    </li>
                    <li id="profile">
                        <h1>Update Password</h1>
                        <?php
                        $msg = "";
                                if (isset($_POST['updatePassword'])) {
                                    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
                                    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
                        
                                    if ($password === $confirm_password) {
                                        $query = mysqli_query($conn, "UPDATE users SET password='{$password}' WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                        
                                        if ($query) {
                                            $msg = "<div class='alert alert-success'>Password changed Successfully.</div>";
                                        }
                                    } else {
                                        $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
                                    }
                                }
                        ?>
                        <form action="" name="chngpwd" method="post">
                            <div class="gray-bg field-title">
                            <?php echo $msg; ?>
                                <h6>Update password</h6>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Current Password</label>
                                <input class="form-control white_bg" id="password" name="currentPassword"
                                    type="password" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">New Password</label>
                                <input class="form-control white_bg" id="newpassword" type="password" name="password"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>
                                <input class="form-control white_bg" id="confirmpassword" type="password"
                                name="confirm-password" required="">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Update" name="updatePassword"
                                    class="btn-uploader">
                            </div>
                        </form>
                    </li>
                    <li id="contact">
                        <h1 style="text-decoration: underline; text-transform: uppercase; font-size: 20px; line-height: 32px;">My Bookings</h1>
                        <div>
                            <?php
                            $useremail = $_SESSION['SESSION_EMAIL'];
                            $qrt = "SELECT tbl_bookings.*,tbl_houses.t_Id,tbl_houses.pname,tbl_houses.pimg1,tbl_houses.price FROM tbl_bookings JOIN tbl_houses ON tbl_bookings.bkid=tbl_houses.t_Id WHERE tbl_bookings.useremail='$useremail'";
                            $bk = mysqli_query($conn, $qrt);
                            if(mysqli_num_rows($bk)>0)
                            {
                                foreach($bk as $book)
                                {
                                    ?>
                            <div style="margin-bottom: 127px;">
                                        <h4 style="color: red;">Request No. <?php echo $book['requestNo']; ?></h4>
                                                    <div style="float: left; margin-right: 22px; width: 22%;">
                                                        <a href="house-details.php?id=<?php echo $book['t_Id']; ?>"><img src="houselistImage/<?php echo $book['pimg1']; ?>" alt="image" style="max-width: 100%;"></a>
                                                    </div>
                                                    <div style="float: left; padding: 12px 0px; width: 61%;">
                                                        <h6 style="font-size: 22px; color: #111111; font-weight: 900; margin: 0 auto 15px;"><a href="house-details.php?id=<?php echo $book['t_Id']; ?>"><?php echo $book['pname']; ?></a></h6>
                                                        <p style="font-size: 16px; line-height: 26px; font-weight: 400; margin-bottom: 15px;;"><b>Request Date:</b> <?php echo $book['createDate']; ?></p>
                                                        <div>
                                                            <p style="font-size: 16px; line-height: 26px; font-weight: 400; margin-bottom: 15px;"><b>Message: </b><?php echo $book['Message']; ?></p>
                                                        </div>
                                                    </div>
                                                    <?php if($book['status']==1)
                                                        { ?>
                                                            <div class="vehicle_status" style="margin-top: -110px;"> <a href="#" class="btn outline btn-xs active-btn" style="border-color: #089901;
                                                    color: #089901; font-size: 15px;
                                                    padding: 4px 20px;
                                                    background: none;
                                                    border-style: solid;
                                                    border-width: 2px; font-weight: 800;">Confirmed</a>
                                                        <div class="clearfix"></div>
                                                    </div>
                            </div>
                                                    <div style="margin-top: 181px;">
                                                        <hr>
                                                        <h5 style="color:blue">Invoice</h5>
                                                        <table style="margin: 0 0 30px; width: 100%;">
                                                        <tbody><tr>
                                                            <th style="border: 1px solid #cccccc; padding: 18px;">Property Name</th>
                                                            <th style="border: 1px solid #cccccc; padding: 18px;">From Date</th>
                                                            <th style="border: 1px solid #cccccc; padding: 18px;">To Date</th>
                                                            <th style="border: 1px solid #cccccc; padding: 18px;">Total Years</th>
                                                            <th style="border: 1px solid #cccccc; padding: 18px;">Amount</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: 1px solid #cccccc; padding: 18px;"><?php echo $book['pname']; ?></td>
                                                            <td style="border: 1px solid #cccccc; padding: 18px;">2021-07-26</td>
                                                            <td style="border: 1px solid #cccccc; padding: 18px;"> 2021-07-28</td>
                                                            <td style="border: 1px solid #cccccc; padding: 18px;">2</td>
                                                            <td style="border: 1px solid #cccccc; padding: 18px;"><?php echo $book['price']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" style="text-align:center; border: 1px solid #cccccc; padding: 18px;"> Grand Total</th>
                                                            <th style="border: 1px solid #cccccc; padding: 18px;"><?php echo $book['price']; ?></th>
                                                        </tr>
                                                        </tbody></table>
                                                        <hr>
                                                    </div>

                                                        <?php 
                                                        } else if($book['status']==2) { ?>
                                                        <div class="vehicle_status" style="margin-top: -110px;"> <a href="#" class="btn outline btn-xs active-btn" style="border-color: #fa2837;
                                                    color: #fa2837; font-size: 15px;
                                                    padding: 4px 20px;
                                                    background: none;
                                                    border-style: solid;
                                                    border-width: 2px; font-weight: 800;">Cancelled</a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                        <?php 
                                                        } else { ?>
                                                        <div class="vehicle_status" style="margin-top: -110px;"> <a href="#" class="btn outline btn-xs active-btn" style="border-color: orange;
                                                    color: orange; font-size: 15px;
                                                    padding: 4px 20px;
                                                    background: none;
                                                    border-style: solid;
                                                    border-width: 2px; font-weight: 800;">Not Confirm Yet!</a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                        <?php 
                                                    } ?>
                                    <?php
                                }
                            }
                            else{
                                echo "No Bookings Available";
                            }
                            ?>
                            </div>
                    </li>
                    <li id="settings">
                        <h1>Sign Out</h1>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Vertical Tab End -->

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
        <?php
    // It is used for updating the Image
    if (isset($_FILES["image"]["name"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];

        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        // Image validation
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
            echo
                "
        <script>
          alert('Invalid Image Extension');
          document.location.href = 'profile.php';
        </script>
        ";
        } elseif ($imageSize > 1200000) {
            echo
                "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = 'profile.php';
        </script>
        ";
        } else {
            $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
            $newImageName .= '.' . $imageExtension;
            $query = "UPDATE users SET image = '$imageName' WHERE id = $id";
            mysqli_query($conn, $query);
            move_uploaded_file($tmpName, 'ProfileImage/' . $imageName);
            echo
                "
        <script>
        document.location.href = 'profile.php';
        </script>
        ";
        }
    }
    ?>

        <?php
// It is used for updating the profile
if (isset($_POST['upload'])) {

    include_once "config/config.php";
    $email = $_SESSION['SESSION_EMAIL'];

    // get values form input text and number

    //    $id = $_POST['id'];
    $name = $_POST['name'];
    // $ProfileImg = $_POST['ProfileImg'];
    $ContactNo = $_POST['ContactNo'];
    $DOB = $_POST['DOB'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Country = $_POST['Country'];


    // mysql query to Update data
    $query = "UPDATE `users` SET `name`='" . $name . "',`Contact No`='" . $ContactNo . "',`DOB`='" . $DOB . "',`Address`='" . $Address . "',`City`='" . $City . "',`Country`='" . $Country . "' WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo
            "<script>
          alert('Data Updated');
        </script>";
    } else {
        echo
            "<script>
          alert('Data Not Updated');
        </script>";
    }
    mysqli_close($conn);
}

?>

        

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

    <!-- Nav Tab JS Start-->
    <script src="assets/js/vertical-tab.js"></script>
    <!-- Nav Tab JS End-->
</body>

</html>