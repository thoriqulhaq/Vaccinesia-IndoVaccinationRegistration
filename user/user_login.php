<?php 
  session_start();

  include("../config.php");

  error_reporting(0);

  $email = $_POST['user_email'];

  $password = $_POST['user_password'];


  $s = "select * from admin where email = '$email' && password = '".md5($password)."'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);
  
  if (isset($email) && isset($password)) {
    if ($num == 1)
    {
      $_SESSION['user_email'] = $_POST['user_email']; 
      header('Location:index.php'); 
    }
    else {
      echo "<script>alert('Username/Password incorrect!')</script>";
      echo "<script>location.href='user_login.php'</script>";
     
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vaccinesia - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../login.css">
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../img/login.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h1 style="color:#858CE4;" ><a style="color:#858CE4;" href="index.php">Vaccinesia</a></h1>
              </div>
              <p class="login-card-description">Login into your account</p>
              <form method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password">
                  </div>
                  <button name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">
                    Login
                  </button>
                </form>
                <a href="user_forgotpassword.php" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="user_signup.php" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <script src="../js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
