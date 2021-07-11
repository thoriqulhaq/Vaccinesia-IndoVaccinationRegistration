<?php 

include("../config.php");

error_reporting(0);

session_start();

$name = $_POST['name'];
$phonenum = $_POST['phone-number'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from user where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    
}else {
    $reg = "insert into user (name, phonenum, email, password) values ('$name', '$phonenum', '$email', '$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
    header('Location: user_login.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vaccinesia - Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../login.css">
  <link rel="stylesheet" href="'../styles.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../img/login.png" alt="login" class="login-card-img-2">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h1 style="color:#858CE4;" ><a style="color:#858CE4;" href="index.html">Vaccinesia</a></h1>
              </div>
              <p class="login-card-description">Sign up your account</p>
              <form method="post" action="signup_process.php">
                  <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="name" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group mb-4">
                    <label for="phone-number" class="sr-only">Phone Number</label>
                    <input type="tel" name="phone-number" id="phone-number" class="form-control" placeholder="Phone No.">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <button name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">
                    Register
                  </button>
                </form>
                <p class="login-card-footer-text">Already have an account? <a href="user_login.php" class="text-reset">Login here</a></p>
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
