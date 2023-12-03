 <!-- Navbar Start -->
 <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="assets/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Dream Land</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="aboutus.php?type=about" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="house-listing.php" class="dropdown-item">Property List</a>
                                <a href="saved.php" class="dropdown-item">Saved Property</a>
                                <?php
                                if (isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL'] == true) { ?>
                                <a href="Postproperty.php" class="dropdown-item">Post Property</a>
                                <?php
                                }else{?>
                                <a href="includes/login.php" class="dropdown-item">Post Property</a>
                                <?php
                                } ?>
                            </div>
                        </div>
                        <a href="contactus.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php
                    
                    if(isset($_SESSION['SESSION_EMAIL']) && $_SESSION['SESSION_EMAIL']==true)
                    {
                        $id = $user["id"];
                    $name = $user["name"];
                    $image = $user["image"];
                        echo"
                        <div class='action' style='position: inherit;'>
                            <div class='profile' onclick='menuToggle();'>
                                ";
                                if($image>'0')
                            {
                                echo "<img src='ProfileImage/$image'>";
                            }
                            else
                            {
                                echo "<img src='ProfileImage/temp.png'>";
                            }
                            echo"
                            </div>

                            <div class='menu'>";
                                if($image>'0')
                            {
                                echo "<img src='ProfileImage/$image'>";
                            }
                            else
                            {
                                echo "<img src='ProfileImage/temp.png'>";
                            }
                            echo"
                                <h3>
                                  $name
                                    <div>
                                        Operational Team
                                    </div>
                                </h3>
                                <ul style='margin-left: -30px;'>
                                    <li>
                                        <span class='material-icons icons-size'>person</span>
                                        <a href='profile.php'>My Profile</a>
                                    </li>
                                    <li>
                                        <span class='material-icons icons-size'>mode</span>
                                        <a href='profile.php'>Edit Account</a>
                                    </li>
                                    <li>
                                        <span class='material-icons icons-size'>list_alt</span>
                                        <a href='mybooking.php'>My Bookings</a>
                                    </li>
                                    <li>
                                        <span class='material-icons icons-size'>reviews</span>
                                        <a href='Postproperty.php'>Post Property</a>
                                    </li>
                                    
                                    <li>
                                        <span class='material-icons icons-size'>logout</span>
                                        <a href='logout.php'>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        ";
                    }
                    else
                    {
                        echo"
                        <a href='includes/login.php' class='btn btn-primary px-3 d-none d-lg-flex'>Login</a>
                        ";
                    }
                    ?>
                    
                    
                </div>
            </nav>
        </div>
        <!-- Navbar End -->