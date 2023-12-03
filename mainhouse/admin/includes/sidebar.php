<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">All Users</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">All Users</a></li>
          <li><a href="adminlist.php">Admin</a></li>
          <li><a href="userlist.php">Users</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Property</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Property</a></li>
          <li><a href="add_property.php">Add Property</a></li>
          <li><a href="view_property.php">View Property</a></li>
        </ul>
      </li>
      <li>
        <a href="bookinglist.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Manage Booking</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="bookinglist.php">Manage Booking</a></li>
        </ul>
      </li>
      <li>
        <a href="contactlist.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Contact</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="contactlist.php">Contact</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Pages</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Pages</a></li>
          <li><a href="pages.php">Manage Pages</a></li>
          <li><a href="view_pages.php">View Pages</a></li>
        </ul>
      </li>
      <li>
        <a href="review.php">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Review</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="review.php">Review</a></li>
        </ul>
      </li>
      <!-- <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> -->
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['AdminLoginId']; ?></div>
        <div class="job">Operational Team</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
