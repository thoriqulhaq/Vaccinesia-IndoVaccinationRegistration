<?php 

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'vaccinesia');

$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from admin where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header('location:admin_panel.php');
}else {
    header('location:login.php');
}

?>