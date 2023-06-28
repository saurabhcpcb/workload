<header class="main-header">
    <!-- Logo -->
    <?php 
	if($_SESSION['userId']['user_type']==4){
	?>
     <a href="dashboard11.php" class="logo">
    <?php 
	}
	else
	{
	?>
    <a href="dashboard.php" class="logo">
    <?php } ?>
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <img src="images/admin_logo.png" />
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="dashboard.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <li class="dropdown user user-menu">
            <a href="logout.php" class="dropdown-toggle"  onclick="return confirm('Are you sure to log out ?');">
              <img src="images/no.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php if(empty($_SESSION['userId']['name'])){echo $_SESSION['userId']['Officer'];} else { echo $_SESSION['userId']['name']; }?></span>
            </a>
             
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>