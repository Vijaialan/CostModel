<?php 
include("db.php");
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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="col-xs-12">
    <div class="col-xs-6">
      <img src="login_bg.png">
    
    <section class="comp_name">
          <span class="title">Industry Cost Profile</span><br>
          
    </section>
    <section class="comp_tag">
    <span class="title">Value is more expensive than price.</span>
  </section>
                    <section class="powerdby">
                        <span class="title">Powered by the</span><br>
                        <img src="company_logo.png" alt="logo">
                     </section>
       </div>              
    <div class="col-xs-6 login_area">
         
<div class="login-box" style="width: 70%;">

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="#" method="post">

               <div class="box-body ">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="mail_id" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="password">
                  <label for="inputPassword3" class="col-sm-3 control-label">Password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
              
              </div>  

   
       <div class="col-xs-12" style="text-align: right;">
          <div class="checkbox icheck">
            <label>
              <a href="#">Forgot Password?</a><br><br>
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
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
<?php

 if(isset($_POST['login']))
 {
 $mail_id = $_POST['mail_id'];
 $password = $_POST['password'];

$query = "SELECT * FROM `user_login` WHERE user_name='$mail_id' and user_password='$password'";
        $re = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($re);
        $count = mysqli_num_rows($re);
        $role = $row['role'];

 }

 ?>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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
