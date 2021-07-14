<?php
session_start(); 
if (session_id() == '' || !isset($_SESSION['hospital_email'])) {
    header("Location: hospital_login.php");
}

include("../config.php");
$account = $_SESSION["hospital_email"];
$account_result = mysqli_query($con, "select HospitalName from hospital where Email = '$account'");

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vaccinesia - Hospital</title>
    <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/master.css" rel="stylesheet">
    <link rel="shortcut icon" type="image" href="../img/KemenKes-logo-bw.png"/>
    <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="../img/logo_vaccinesia.jpg" alt="Vaccinesia" class="vaccinesia-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="hospital_dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="hospital_vaccine_registration.php"><i class="fas fa-user"></i> Vaccine Registration</a>
                </li>
                <li>
                    <a href="vaccine.php"><i class="fas fa-syringe"></i> Vaccine Stock</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-light bg-violet">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-light" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-hospital"></i> <span> 
                                    <?php 
                                        while ($info = $account_result->fetch_assoc()) {
                                            $myvalue = $info['HospitalName'];
                                            echo ($myvalue);
                                        }
                                    ?>
                                </span> <i style="font-size: .8em; padding-left:10px;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="hospital_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="hospital_logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>