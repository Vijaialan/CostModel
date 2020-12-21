<!DOCTYPE html>
<html><meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
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
<body class="hold-transition register-page">
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
<div class="col-xs-6" >
<div class="register-box" style="width: 70%;">

  <div class="register-box-body">
    <p class="login-box-msg">Kindly fill the details requested below</p>

    <form class="form-horizontal">
      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">First Name</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter First Name">
                  </div>
                </div>
       <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Last Name</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Last Name">
                  </div>
                </div>
         <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Email id</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Email id">
                  </div>
                </div>

          <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Job Title</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Job Title">
                  </div>
                </div>
                
           <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Company Name</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Company Name">
                  </div>
                </div>
                
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Company Code</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="If you are an enterprise user ">
                  </div>
                </div>
                

      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
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
