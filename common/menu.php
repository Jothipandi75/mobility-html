<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
//$first_part = $components[1];
?>
<header class="main-header">
            <!-- Logo -->
			<a href="index.php" class="logo" >
			  <!-- <span class="logo-mini"><b>M</b>EA</span> -->
			  <img src="dist/img/icons/Group_1.png" class="img-circle" alt="User Image" data-toggle="push-menu" role="button">
			  <span class="logo-lg"><b>Account</b>name
			  <p class="mb_0">Brand name <i class="fa fa-caret-down" aria-hidden="true"></i></p>
			  </span>
			  
			</a>
			<!-- <div class="user-panel">
                  <div class="pull-left image" data-toggle="push-menu" role="button">
                     <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
				     <a href="#">Account name</a>
                     <p>Brand name</p>
                  </div>
               </div> -->
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
               <!-- Sidebar toggle button-->
               <!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a> -->
			   <p class="grid_name">Account name/Brand name</p>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                  </ul>
               </div>
            </nav>
         </header>
         <aside class="main-sidebar">
            <section class="sidebar">
               <ul class="sidebar-menu" data-widget="tree">
                 <!--  <li class="header">MAIN NAVIGATION</li> -->
                  <li class="<?php if ($first_part=="dashboard") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard.php"><!--<i class="fa fa-bullhorn" aria-hidden="true"></i>--><img alt="" class="icon_size" src="dist/img/icons/dashboard.png"> <span>Dashboard</span></a></li>
                  <li class="<?php if ($first_part=="index") {echo "active"; } else  {echo "noactive";}?>"><a href="index.php"><!--<i class="fa fa-bullhorn" aria-hidden="true"></i>--><img alt="" class="icon_size" src="dist/img/icons/campaign.png"> <span>Campaigns</span></a></li>
                  <li class="<?php if ($first_part=="audience_group_list") {echo "active"; } else  {echo "noactive";}?>"><a  href="audience_group_list.php"><!--<i class="fa fa-user" aria-hidden="true"></i>--><img alt="" class="icon_size" src="dist/img/icons/audience.png"> <span>Audience group</span></a></li>
                  <li class="<?php if ($first_part=="templates") {echo "active"; } else  {echo "noactive";}?>"><a  href="templates.php"><!--<i class="fa fa-inbox" aria-hidden="true"></i>--><img alt="" class="icon_size" src="dist/img/icons/templates.png"> <span>Templates</span></a></li>
				  <!--<img alt="" class="grid_bottom_img" src="dist/img/bottom_logo.png">-->
               </ul>
			   
            </section>
            <!-- /.sidebar -->
         </aside>
		 <div class="grid_bottom_img">
		 <img alt="" src="dist/img/back_icon.png" >
				  <!--<p>Back to Waas System</p>-->
				  </div>