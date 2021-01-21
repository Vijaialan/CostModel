 <?php
 require_once './Model/Member.php';
$user_type = $_SESSION["user_type"];
$user_name = $_SESSION["user_name"];
$user_id = $_SESSION["user_id"];

$menu1 = $menu2 = $menu3 = $menu4 = $menu5 =  $menu6 = 'none';

if($user_type==0){
  $menu1 =  $menu2 = $menu3 = $menu4 = $menu5 = 'block';
}
if($user_type==1){
  $menu1 =  $menu2 = $menu3 = $menu4 = $menu5 = 'block';
}
if($user_type==2){
   $menu2 = $menu5 =  'block';
}
if($user_type==3){
   $menu2 = $menu5 = $menu6 =  'block';
}

 ?> <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
  
    <ul class="sidebar-menu" data-widget="tree">
        
      
       <li style=display:<?php echo $menu1;?>>
          <a href="home.php">
            <span>Home</span>
          </a>
        </li>
        <li style=display:<?php echo $menu2;?>>
          <a href="cost_profile.php">
            <span>Cost Profile</span>
          </a>
        </li>
        <!-- <li style=display:<?php echo $menu3;?>>
          <a href="report_user_details.php">
            <span>User Management</span>
          </a>
        </li> -->
      
        <li style=display:<?php echo $menu4;?>>
          <a href="plan_rate_form.php">
            <span>Membership Rates Form</span>
          </a>
        </li>
        <li style=display:<?php echo $menu5;?>>
          <a href="account_setting.php">
            <span>Account Settings</span>
          </a>
        </li>
        <li style=display:<?php echo $menu6;?>>
          <a href="subscription_history.php">
            <span>Subscription History</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>