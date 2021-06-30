<?php 

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'vaccinesia');

if (isset($_POST["submit"])) {
    $province = $_POST["province"];
    $result = $con->prepare("select * from hospital_location where province = '$province'");
    $result->setFetchMode(PDO:: FETCH_OBJ);
    $result->execute();
}

?>