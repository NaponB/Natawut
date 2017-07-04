<!DOCTYPE html>
<html lang="en">
<head>
	<title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br>
<div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="#" method="post" role="form" style="display: block;">
                <h2>LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <a href="register.php" id="register"><div class="form-control btn btn-login">Register Now</div></a>
          </div>
        </div>
      </div>
      <a class="btn btn-primary" href="index.php" role="button">หน้าลูกค้า</a>
      <a class="btn btn-primary" href="index1.php" role="button">หน้าเจ้าของร้าน</a>
      <a class="btn btn-primary" href="index2.php" role="button">หน้าพนักงาน</a>
    </div>
  </div>
</div>
</body>
</html>
