<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {

    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
   // var_dump($registrationResponse);
}
?>
<!DOCTYPE html>
<html><meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="col-xs-12">
   <div class="col-xs-6" id="left-side">
      <img src="assets/images/login_back.png" style="height: 100%;width: 100%;">
         <div class="overlay" style="opacity: .6;height: 100%;width: 95%;margin-left:2.6%; "></div>
    
    <section class="comp_name">
          <span class="title">Industry Cost Profile</span><br>
          
    </section>
    <section class="comp_tag">
    <span class="title">Value is more expensive than price.</span>
  </section>
                    <section class="powerdby">
                        <span class="title">Powered by the</span><br>
                        <img src="assets/images/company_logo.png" alt="logo">
                     </section>
       </div>
<div class="col-xs-6 register-area" >
<div class="register-box" style="width: 80%;">

  <div class="register-box-body">
    <p class="login-box-msg">Kindly fill the details requested below</p>
    
      <?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
            <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
              <div class="server-response success-msg"><?php echo $registrationResponse["message"];?></div>
                    <?php
        }
        ?>
        <?php
    }
    ?>
    <form class="form-horizontal" method="POST">
      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">First Name <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" >
                  </div>
                </div>
       <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Last Name <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" >
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Email id <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email id" >
                  </div>
                   <span id='uname_response' class="col-sm-12 validation-reponse"></span>
                </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Password <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="Password" class="form-control" name="password" id="password" placeholder="Enter Password" >
                  </div>
                </div> 
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Confirm Password <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="Password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" onchange="passwordcheck()">
                  </div>
                <span  id="cpass_error" class="col-sm-12" style="text-align:right;color: red;padding-top: 5px;display: none;">Please make sure your passwords match.</span>  
                </div>       

          <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Job Title <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter Job Title" required="" >
                  </div>
                </div>
                
           <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Company Name <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" >
                  </div>
                 <span id='compname_response' class="col-sm-12 validation-reponse"></span> 
                </div>
                
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Company Code</label>

                  <div class="col-sm-8">
                    <input type="text" name="comp_unique_code" class="form-control" id="comp_unique_code" placeholder="If you are an enterprise user">
                  </div>
                 <span id="compcode_response" class="col-sm-12 validation-reponse"></span>  
                </div>
                

      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4 reg-button">
          <button type="submit" value="Register" id="signup-btn" name="signup-btn" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

<div class="col-xs-12" >
    <a href="index.php" class="text-center">I already have a membership</a>
  </div>
  </div>
  <!-- /.form-box -->
</div>
  </div>
</div>

<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script src="assets/js/validation.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

$(document).ready(function(){

   $("#email").change(function(){
       var username = $(this).val().trim();
            $.ajax({
            url: 'ajax.php',
            type: 'post',
            data: {username: username},
            success: function(response){
                $('#uname_response').html(response);
             }
         });
     
    });
//for comp name n comp code
   // $("#company_name").change(function(){
   //     var compName = $(this).val().trim();
   //          $.ajax({
   //          url: 'ajax.php',
   //          type: 'post',
   //          data: {companyName: compName},
   //          success: function(response){
   //              $('#compname_response').html(response);
   //           }
   //       });
     
   //  }); 

   // $("#comp_unique_code").change(function(){
   //     var compCode = $(this).val().trim();
   //          $.ajax({
   //          url: 'ajax.php',
   //          type: 'post',
   //          data: {companyCode: compCode},
   //          success: function(response){
   //              $('#compcode_response').html(response);
   //           }
   //       });
     
   //  });

});  
</script>
</body>
</html>
