<?php 

session_start();
header('Location: login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'vaccinesia');

$name = $_POST['name'];
$phonenum = $_POST['phone-number'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from user where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Account Already Registered";
}else {
    $reg = "insert into user (name, phonenum, email, password) values ('$name', '$phonenum', '$email', '$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>