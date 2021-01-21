<?php
 require_once './Model/Member.php';
 session_start();
$user_type = $_SESSION["user_type"];
$user_name = $_SESSION["user_name"];
$user_id = $_SESSION["user_id"]; 
$job_title = $_SESSION["job_title"]; 
$first_name = $_SESSION["first_name"]; 
$f=substr($first_name,0,1);
$last_name = $_SESSION["last_name"]; 
$l=substr($last_name,0,1);
$created_date = strtotime($_SESSION["created_date"]);
$c_mon = date("F",$created_date);
$y_mon = date("Y",$created_date); 

 ?><header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cost Profile</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                </ul>
              </li>
              <!-- <li class="footer"><a href="#">View all</a></li> -->
            </ul>
          </li>
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            
             
            <a href="" style="cursor: default;">
              <span ><?php echo $first_name;?> <?php echo $last_name;?></span>
              <span style="border-radius: 50%;background: #f6f6f6;color: #3c8dbc;text-align: center;padding: 5px;font-size: 12px;font-weight: 700;"><?php echo $f;?> <?php echo $l;?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="logout.php"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>