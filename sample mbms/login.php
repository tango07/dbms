<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  
  <link rel="stylesheet" type="text/css" href="styles.css">

  <style type="text/css">
    body{
        background-image: url("images/login.jpg");
        }

     .onhov{
      color: red;
      text-decoration-style:none; 
     }   
  </style>

</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><a style="color:#FFC312;" class="onhov" href="http://www.facebook.com"><i class="fab fa-facebook-square" ></i></a></span>
          <span><a style="color:#FFC312;"href="http://www.google.com"><i class="fab fa-google-plus-square"></i></a></span>
          <span><a style="color:#FFC312;"href="http://twitter.com"><i class="fab fa-twitter-square"></i></a></span>
        </div>
      </div>
      <div class="card-body">
        <form method="post" action="login.php">
          <?php include('errors.php'); ?>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="username" class="form-control" placeholder="username" name="username">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password">
          </div>
          <div class="row align-items-center remember" >
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" value="Login"  name="login_user" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer" >
        <div class="d-flex justify-content-center links" style="color: #FFC312;" >
          Don't have an account?<a href="register.php" style="color: #F8E9BB;">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#" style="color: #F8E9BB;">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>