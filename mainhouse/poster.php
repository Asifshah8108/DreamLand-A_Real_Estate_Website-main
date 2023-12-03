<?php
    session_start();
    include 'config/config.php';
    if(isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL']==true){
        $currentUser = $_SESSION['SESSION_EMAIL'];
        $data = "SELECT * FROM users WHERE email = '$currentUser'";
        $gotResults = mysqli_query($conn,$data);
        $user = mysqli_fetch_array($gotResults);   
    }
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <title>Preview About</title>
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
    <link href="assets/css/aboutus.css" rel="stylesheet">

    <!-- New Links Added for profile drop-down -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
 

        <!-- Navbar Start -->
        <?php
            include("includes/navbar.php");
        ?>
        <!-- Navbar End -->


        <div class="row">
                            <div class="col-xl-12">
                                <!-- <h5 class="card-title">About Us </h5> -->
								<?php 
									if(isset($_GET['msg']))	
									echo $_GET['msg'];
								?>
                                <form method="post" action="" enctype="multipart/form-data">
                                <div class="card-body">
									<h5 class="card-title">Property Detail</h5>
																											
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_name" required="" placeholder="Enter Title" fdprocessedid="k7ne2i">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<main style="width: 75%;">
														<textarea id="editor" name="p_description">
														</textarea>
													</main>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="p_type" fdprocessedid="o0hrjq">
															<option value="">Select Type</option>
															<option value="1">Apartment</option>
															<option value="3">Flat</option>
															<option value="5">Shop</option>
															<option value="2">Home</option>
															<option value="4">Villa</option>
															<option value="6">TownHouse</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="offer_type" fdprocessedid="kuzocn">
															<option value="">Select Status</option>
															<option value="Rent">Rent</option>
															<option value="Sale">Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bathroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_bathroom" required="" placeholder="Enter Bathroom (only no 1 to 10)" fdprocessedid="xpnjs7">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kitchen</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_kitchen" required="" placeholder="Enter Kitchen (only no 1 to 10)" fdprocessedid="t8q39v">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Furnished Status</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="furnished_status" fdprocessedid="kuzocn">
															<option value="">Select Status</option>
															<option value="Furnished">Furnished</option>
															<option value="Semi-Furnished">Semi-Furnished</option>
															<option value="Un-Furnished">Un-Furnished</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Room</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_room" required="" placeholder="Enter Total Room" fdprocessedid="t8q39v">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="bhk" fdprocessedid="xtsdpg">
															<option value="">Select BHK</option>
															<option value="1 BHK">1 BHK</option>
															<option value="2 BHK">2 BHK</option>
															<option value="3 BHK">3 BHK</option>
															<option value="4 BHK">4 BHK</option>
															<option value="5 BHK">5 BHK</option>
															<option value="1,2 BHK">1,2 BHK</option>
															<option value="2,3 BHK">2,3 BHK</option>
															<option value="2,3,4 BHK">2,3,4 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bedroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_bedroom" required="" placeholder="Enter Bedroom  (only no 1 to 10)" fdprocessedid="l5big">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Balcony</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_balcony" required="" placeholder="Enter Balcony  (only no 1 to 10)" fdprocessedid="m2p9v">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hall</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_living" required="" placeholder="Enter Hall  (only no 1 to 10)" fdprocessedid="sz1qyq">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Age</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_age" required="" placeholder="Enter Property Age" fdprocessedid="sz1qyq">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Enter Map Link</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_age" placeholder="Enter Map Embedded Link" fdprocessedid="sz1qyq">
													</div>
												</div>
												
											</div>
										</div>
										<h4 class="card-title">Price &amp; Location</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="floor" fdprocessedid="3aulzj">
															<option value="">Select Floor</option>
															<option value="1st Floor">1st Floor</option>
															<option value="2nd Floor">2nd Floor</option>
															<option value="3rd Floor">3rd Floor</option>
															<option value="4th Floor">4th Floor</option>
															<option value="5th Floor">5th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_price" required="" placeholder="Enter Price" fdprocessedid="a15s1">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_address" required="" placeholder="Enter Address" fdprocessedid="6pkyz9">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_city" required="" placeholder="Enter City" fdprocessedid="h02pk6">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="p_floor" fdprocessedid="jd416f">
															<option value="">Select Floor</option>
															<option value="1 Floor">1 Floor</option>
															<option value="2 Floor">2 Floor</option>
															<option value="3 Floor">3 Floor</option>
															<option value="4 Floor">4 Floor</option>
															<option value="5 Floor">5 Floor</option>
															<option value="6 Floor">6 Floor</option>
															<option value="7 Floor">7 Floor</option>
															<option value="8 Floor">8 Floor</option>
															<option value="9 Floor">9 Floor</option>
															<option value="10 Floor">10 Floor</option>
															<option value="11 Floor">11 Floor</option>
															<option value="12 Floor">12 Floor</option>
															<option value="13 Floor">13 Floor</option>
															<option value="14 Floor">14 Floor</option>
															<option value="15 Floor">15 Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_carpet" required="" placeholder="Enter Area Size (in sqrt)" fdprocessedid="fiv14i">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_state" required="" placeholder="Enter State" fdprocessedid="mk98h5">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Country</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="p_country" required="" placeholder="Enter Country" fdprocessedid="6pkyz9">
													</div>
												</div>
												
											</div>
										</div>
										
										<h4 class="card-title">Animities</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="camera">
														<label class="form-check-label" for="flexCheckDefault">
															Surveillance cameras
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="elevator">
														<label class="form-check-label" for="flexCheckDefault">
															Elevator
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="airconditioner">	
														<label class="form-check-label" for="flexCheckDefault">
															Air Conditioner
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="wifi">
														<label class="form-check-label" for="flexCheckDefault">
															Wifi
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="pool">
														<label class="form-check-label" for="flexCheckDefault">
															Pool
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="gym">
														<label class="form-check-label" for="flexCheckDefault">
															Gym
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="balcony">
														<label class="form-check-label" for="flexCheckDefault">
															Balcony
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="parks">
														<label class="form-check-label" for="flexCheckDefault">
															Parks
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="clubhouse">
														<label class="form-check-label" for="flexCheckDefault">
															Clubhouse
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="dogpark">
														<label class="form-check-label" for="flexCheckDefault">
															Dog Park
														</label>
													</div>
												</div>
												<div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="garage">
														<label class="form-check-label" for="flexCheckDefault">
															Garage
														</label>
													</div>
												</div>
											</div>
										</div>
										
										<!-- <div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<main style="width: 75%;">
                                        		<textarea id="editor" name="pgedetails">
                                                </textarea>
                                            </main>
										</div> -->
												
										<h4 class="card-title">Image &amp; Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_01" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_03" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 5</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_05" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="status" fdprocessedid="pwc9ie">
															<option value="">Select Status</option>
															<option value="Available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_02" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image_04" type="file" required="">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required="" name="isFeatured" fdprocessedid="p7whje">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
								</div>
                                            
                                <div class="form-group row" style="margin-bottom: 20px;">
                                   <button type="submit" name="post_property" class="btn btn-primary" style="margin-left: 240px;width: 100px;">Submit
                                   </button>
                                </div>
                                </form>
                            </div>
                        </div>




















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
</body>

</html>