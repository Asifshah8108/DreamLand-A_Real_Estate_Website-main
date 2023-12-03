<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <!-- <span class="text">Drop Down Sidebar</span> -->
      <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="img/avatar-01.png" alt="">
        </div>
    
        <div class="menu">
            <h3>
                <?php echo $_SESSION['AdminLoginId']; ?>
                <div>
                    Operational Team
                </div>
            </h3>
            <ul class="littleside">
                <li>
                    <span class="material-icons icons-size">person</span>
                    <a href="profile.php">My Profile</a>
                </li>
                <li>
                <span class="material-icons icons-size">lock_reset</span>
                    <a href="change-password.php">Change Password</a>
                </li>
                <li>
                    <span class="material-icons icons-size">logout</span>
                    <a href="logout.php" name="logout">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <div class="content container-fluid">