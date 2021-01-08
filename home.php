<?php
 require_once './Model/Member.php';

 ?><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
<link rel="stylesheet" href="assets/css/main.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php 
include("header.php");
include("left_panel.php");
$user_type = $_SESSION["user_type"];
$user_name = $_SESSION["user_name"];
$user_id = $_SESSION["user_id"];
?>
  


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6" onclick="showEnterpriseAdmin()">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>20</h3>

              <p>Enterprise Admins</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->   
        <div class="col-lg-3 col-xs-6" onclick="showEnterpriseUsers()">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>153</h3>

              <p>Enterprise Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->  
        <div class="col-lg-3 col-xs-6" onclick="showIndiviUsers()">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Individual User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" onclick="showPaymentDetails()">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>134</h3>

              <p>Payment Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
       

    <section class="content">
      <div class="row">
          
        <div class="col-xs-12">
        <!-- Enterprise Admins starts  -->  
        <div id="EnterpriseAdmins" style="display:none;">
        <div class="box-header">  
              <h3 class="box-title">Enterprise Admins</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="enterprise_admin" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>Company Code</th>
                  <th>Company Name</th>
                  <th>Designation</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>21000002</td>
                  <td>Cody Brown</td>
                  <td>CA243454</td>
                  <td>Brown Industries</td>
                  <td>MD</td>
                </tr>
                </tfoot>
              </table>
            </div>
        </div> 
            <!-- Enterprise Admins ends  -->
            <!-- Enterprise Users starts  -->   
            <div id="EnterpriseUsers" style="display:none;">
        <div class="box-header">
              <h3 class="box-title">Enterprise Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="enterprise_user" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>Company Code</th>
                  <th>Company Name</th>
                  <th>Designation</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>21000002</td>
                  <td>Cody Brown</td>
                  <td>CA243454</td>
                  <td>Brown Industries</td>
                  <td>MD</td>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>  
            <!-- Enterprise Users ends  -->
            <!-- Individual Users starts  -->  
            <div id="IndiviUsers" style="display:none;">   
        <div class="box-header">
              <h3 class="box-title">Individual Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="indivi_user" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>Company Code</th>
                  <th>Company Name</th>
                  <th>Designation</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>21000002</td>
                  <td>Cody Brown</td>
                  <td>CA243454</td>
                  <td>Brown Industries</td>
                  <td>MD</td>
                </tr>
                </tfoot>
              </table>
            </div>
        </div> 
            <!-- Individual Users ends  -->

            <!-- Payment Details starts  -->  
            <div id="PaymentDetails" style="display:none;">            
        <div class="box-header">
              <h3 class="box-title">Payment Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="payment_details" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>Company Code</th>
                  <th>Company Name</th>
                  <th>Plan Type</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Paid Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>21000002</td>
                  <td>Cody Brown</td>
                  <td>CA243454</td>
                  <td>Brown Industries</td>
                  <td>Gold</td>
                  <td>2020-01-01</td>
                  <td>2020-03-01</td>
                  <td>2020-01-01</td>
                </tr>
                </tfoot>
              </table>
            </div>
        </div> 
            <!-- Payment Details ends  -->

            
        </div>
        
        
      </div>
      <!-- /.row -->
    </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io/">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script src="assets/js/ad.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#enterprise_admin').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#enterprise_user').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#indivi_user').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#payment_details').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  function showEnterpriseAdmin(){
      document.getElementById("EnterpriseAdmins").style.display="block";
      document.getElementById("EnterpriseUsers").style.display="none";
      document.getElementById("IndiviUsers").style.display="none";
      document.getElementById("PaymentDetails").style.display="none";
  }
  function showEnterpriseUsers(){
      document.getElementById("EnterpriseUsers").style.display="block";
      document.getElementById("EnterpriseAdmins").style.display="none";
      document.getElementById("IndiviUsers").style.display="none";
      document.getElementById("PaymentDetails").style.display="none";
  }
  function showIndiviUsers(){
      document.getElementById("IndiviUsers").style.display="block";
      document.getElementById("EnterpriseAdmins").style.display="none";
      document.getElementById("EnterpriseUsers").style.display="none";
      document.getElementById("PaymentDetails").style.display="none";
  }
  function showPaymentDetails(){
      document.getElementById("PaymentDetails").style.display="block";
      document.getElementById("EnterpriseAdmins").style.display="none";
      document.getElementById("EnterpriseUsers").style.display="none";
      document.getElementById("IndiviUsers").style.display="none";
  }
</script>
</body>
</html>
