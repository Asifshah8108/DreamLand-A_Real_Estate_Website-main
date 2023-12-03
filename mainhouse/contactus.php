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
    <link href="assets/css/menu.css" rel="stylesheet">

    <!-- ContactUs Page -->
    <link rel="stylesheet" href="assets/css/contactus.css">

    <script src="assets/js/sweetalert.min.js"></script>
    <style>
        .vibe {
            background: #ff578b;
    color: #fff;
    border: none;
    font-size: 1.1em;
    max-width: 120px;
    font-weight: 500;
    cursor: pointer;
    padding: 14px 15px;
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

        <div class="contactUs">
            <div class="title">
                <h2>Get in Touch</h2>
            </div>
            <div class="box">
                <!-- Form -->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <form action="" method="post">
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="John" name="FirstName">
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Doe" name="LastName">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="text" placeholder="johndoe@email.com" name="Email">
                                </div>
                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="text" placeholder="+91 987 654 3210" name="Mobile">
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea name="Message" placeholder="write your message here..."></textarea>
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <!-- <input type="submit" name="Send" value="Send"> -->
                                    <?php
                                    if(isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL']==true)
                                    {?>
                                        <input type="submit" name="Send" value="Send">
                                        <?php 
                                        } else { ?>
                                        <a href="includes/login.php" class="vibe">Login First</a>
                                        <?php 
                                    }?>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                <!-- info Box  -->
                <div class="contact info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span>
                                <ion-icon name="location"></ion-icon>
                            </span>
                            <p>Andheri West, Mumbai <br>INDIA</p>
                        </div>
                        <div>
                            <span>
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <a href="mailto:loremipsum@email.com">loremipsum@email.com</a>
                        </div>
                        <div>
                            <span>
                                <ion-icon name="call-outline"></ion-icon>
                            </span>
                            <a href="tel:+919876543210">+91 987 654 3210</a>
                        </div>
                        <!-- Social Media Links -->
                        <ul class="sci">
                            <li><a href="#">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a></li>
                            <li><a href="#">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a></li>
                        </ul>
                    </div>
                </div>


                <!-- Map -->
                <div class=" contact map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.114827184256!2d77.20653218080871!3d28.62890171870568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b741d057%3A0xcdee88e47393c3f1!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi%20110001!5e0!3m2!1sen!2sin!4v1669127286080!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php include("includes/footer.php"); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
        <!-- House Details Page -->
        <script src="https://kit.fontawesome.com/3f1538d59e.js" crossorigin="anonymous"></script>

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
</body>

</html>

<?php
if(isset($_POST['Send']))
{
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Message = $_POST['Message'];
    $useremail = $_SESSION['SESSION_EMAIL'];
    $contact = "INSERT INTO `contact`(`FirstName`, `LastName`, `Email`, `Mobile`, `Message`, `useremail`) VALUES ('$FirstName','$LastName','$Email','$Mobile','$Message','$useremail')";
    $cnt_run = mysqli_query($conn, $contact);
    if($cnt_run)
    {
        echo '<script type="text/javascript">swal("Your Request has been sent.","You will be contacted very soon","success")</script>';
    }else
    {
        echo '<script type="text/javascript">swal("Something went wrong.","Please try again","error")</script>';
    }
}
?>