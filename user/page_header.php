<?php
session_start(); //gets session id from cookies, or prepa
if (session_id() == '' || !isset($_SESSION['user_email'])) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccinesia - Indonesia Vaccination</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image" href="./img/KemenKes-logo-bw.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/master.css" rel="stylesheet">
    <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

    <section class="header">
        <div class="headline">
            <a href="https://www.kemkes.go.id/">
                <img src="../img/KemenKes-logo-bw.png">
                Kementrian Kesehatan Republik Indonesia
            </a>
        </div>
    </section>

    <section class="s1">
        <div class="main-container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    
                    <a class="navbar-brand" href="index.html">
                        Vaccinessia
                        <img src="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vaccine.php">VACCINE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="location.php">LOCATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.php">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="info.php">INFO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="login" href="user_login.php"><b>LOGIN</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


<?php
} else {

    include("../config.php");
    $account = $_SESSION["user_email"];
    $account_result = mysqli_query($con, "select Name from user where Email = '$account'");

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vaccinesia - Indonesia Vaccination</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image" href="./img/KemenKes-logo-bw.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
        <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
        <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/master.css" rel="stylesheet">
        <link rel="../shortcut icon" type="image" href="./img/KemenKes-logo-bw.png"/>
        <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
        <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>

        <section class="header">
            <div class="headline">
                <a href="https://www.kemkes.go.id/">
                    <img src="../img/KemenKes-logo-bw.png">
                    Kementrian Kesehatan Republik Indonesia
                </a>
            </div>
        </section>

        <section class="s1">
            <div class="main-container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        
                        <a class="navbar-brand" href="index.html">
                            Vaccinessia
                            <img src="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vaccine.php">VACCINE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="location.php">LOCATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faq.php">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="info.php">INFO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">CONTACT US</a>
                                </li>
                                <li class="nav-item">
                                <div class="nav-dropdown">
                                    <a href="" class="nav-item nav-link dropdown-toggle text-light" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> <i style="font-size: .8em; padding-left:10px;" class="fas fa-caret-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                        <ul class="nav-list">
                                            <li><a href="user_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="user_logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>



<?php } ?>