<?php
use Phppot\Member;

if (!empty($_POST["login-password"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();

}
?>
<!DOCTYPE html>
<html><meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
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
<body class="hold-transition login-page">
  <div class="col-xs-12">
       <div class="col-xs-6" id="left-side" >
          <img class="left-img" src="assets/images/login_bg.png" style="height: 100%;width: 100%;">
          <div class="overlay" style="opacity: .6;height: 100%;width: 95.5%;margin-left:18px; "></div>
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
    <div class="col-xs-6 login_area">
         
      <div class="login-box" style="width: 80%;">

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" name="login" method="post">

               <div class="box-body ">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="username" id="username" placeholder="Email" required="">
                  </div>
                </div>
                <div class="password">
                  <label for="inputPassword3" class="col-sm-3 control-label">Password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="login-password" id="login-password" placeholder="Password" required="">
                  </div>
                </div>
              <?php if(!empty($loginResult)){?>
        <div class="error-msg" style="text-align: center;color: red;"><span>
          <?php echo $loginResult;?></span></div>
        
        <?php }?>
              </div>  

   
       <div class="col-xs-12" style="text-align: right;">
          <div class="checkbox icheck">
            <label>
              <a href="#">Forgot Password?</a><br><br>
              <button type="submit" name="login-btn" id="login-btn" class="btn btn-primary btn-block btn-flat" value="Login">Login</button>
            </label>
          </div>
        </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-12" style="text-align: center;">
           <a href="register.php" class="text-center">New User? Register here.</a>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
   

  </div>
  <!-- /.login-box-body -->
</div>
</div>
</div>

<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
  



    
</script>
</body>
</html>
