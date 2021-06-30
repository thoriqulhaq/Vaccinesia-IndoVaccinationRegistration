<?php 
session_start();
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <section class="header">
        <div class="headline">
            <a href="https://www.kemkes.go.id/">
                <img src="img/KemenKes-logo-bw.png">
                Kementrian Kesehatan Republik Indonesia
        </a>
        </div>
    </section>

    <section class="s0">
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
                                <a class="nav-link" href="index.html">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vaccine.html">VACCINE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="location.php">LOCATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="info.html">INFO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="login" href="login.php"><b>LOGIN</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </section>

        <section class="s2">
            <div class="main-container">

                <div id="hero-centertitle" class="hero-centertitle">
                    <h1>
                        Search Available Hospital for Vaccination
                    </h1>     
                </div>

                <form id="search-bar" method="get" action="location.php">
                    <div class="inner-form">
                        <div class="outer-input">
                            <div class="inner-input-1">
                                <select name="province" id="province">
                                    <option value="Aceh">
                                        ACEH
                                    </option>
                                    <option value="Sumatera Utara">
                                        SUMATERA UTARA
                                    </option>
                                    <option value="Sumatera Barat">
                                        SUMATERA BARAT
                                    </option>
                                    <option value="Riau">
                                        R I A U
                                    </option>
                                    <option value="Kepulauan Riau">
                                        KEPULAUAN RIAU
                                    </option>
                                    <option value="Jambi">
                                        J A M B I
                                    </option>
                                    <option value="Sumatera Selatan">
                                        SUMATERA SELATAN
                                    </option>
                                    <option value="Kepulauan Bangka Belitung">
                                        KEPULAUAN BANGKA BELITUNG
                                    </option>
                                    <option value="Bengkulu">
                                        BENGKULU
                                    </option>
                                    <option value="Lampung">
                                        LAMPUNG
                                    </option>
                                    <option value="DKI Jakarta">
                                        DKI JAKARTA
                                    </option>
                                    <option value="Jawa Barat">
                                        JAWA BARAT
                                    </option>
                                    <option value="Jawa Tengah">
                                        JAWA TENGAH
                                    </option>
                                    <option value="DI Yogyakarta">
                                        DI YOGYAKARTA
                                    </option>
                                    <option value="Jawa Timur">
                                        JAWA TIMUR
                                    </option>
                                    <option value="Banten">
                                        B A N T E N
                                    </option>
                                    <option value="Bali">
                                        BALI
                                    </option>
                                    <option value="Nusa Tenggara Barat">
                                        NUSA TENGGARA BARAT
                                    </option>
                                    <option value="Nusa Tenggara Timur">
                                        NUSA TENGGARA TIMUR
                                    </option>
                                    <option value="Kalimantan Barat">
                                        KALIMANTAN BARAT
                                    </option>
                                    <option value="Kalimantan Tengah">
                                        KALIMANTAN TENGAH
                                    </option>
                                    <option value="Kalimantan Selatan">
                                        KALIMANTAN SELATAN
                                    </option>
                                    <option value="Kalimantan Timur">
                                        KALIMANTAN TIMUR
                                    </option>
                                    <option value="Kalimantan Utara">
                                        KALIMANTAN UTARA
                                    </option>
                                    <option value="Sulawesi Utara">
                                        SULAWESI UTARA
                                    </option>
                                    <option value="Sulawesi Selatan">
                                        SULAWESI SELATAN
                                    </option>
                                    <option value="Sulawesi Tenggara">
                                        SULAWESI TENGGARA
                                    </option>
                                    <option value="Sulawesi Barat">
                                        SULAWESI BARAT
                                    </option>
                                    <option value="Sulawesi Tengah">
                                        SULAWESI TENGAH
                                    </option>
                                    <option value="Gorontalo">
                                        GORONTALO
                                    </option>
                                    <option value="Maluku">
                                        MALUKU
                                    </option>
                                    <option value="Maluku Utara">
                                        MALUKU UTARA
                                    </option>
                                    <option value="Papua">
                                        PAPUA
                                    </option>
                                    <option value="Papua Barat">
                                        PAPUA BARAT
                                    </option>
                                </select>
                            </div>
                            <div class="inner-input-2">
                                <input id="search" type="submit" name="submit" value="Search">
                            </div>
                        </div>
                        <div class="content-wrapper-location">
                                <div class="available-location-1">
                                    <?php 
                                    
                                    $cons = mysqli_connect('localhost', 'root', '');
                                    mysqli_select_db($cons, 'vaccinesia');
                                    $province = null;
                                    
                                    if (isset($_GET["submit"])) {
                                        $province = $_GET["province"];
                                        $result = mysqli_query($cons, "select * from hospital_location where province = '$province'");
                                        $num = mysqli_num_rows($result);
                                        if ($num > 0) {
                                    ?>
                                        <h5><?php echo $num; ?> Result</h5><br>
                                        <table>
                                                <tr>
                                                    <th rowspan="2">City</th>
                                                    <th rowspan="2">Hospital</th>
                                                    <th colspan ="2">Available</th>
                                                </tr>
                                                <tr>
                                                    <th>Sinovac</th>
                                                    <th>Astrazeneca</th>
                                                </tr>
                                    <?php
                                    while($d = mysqli_fetch_array($result)){
                                        ?>  
                                            <tr>
                                                <td> <?php echo $d['City']; ?> </td>
                                                <td> <?php echo $d['Hospital']; ?> </td>
                                                <td> <?php echo $d['Sinovac']; ?> </td>
                                                <td> <?php echo $d['Astrazeneca']; ?> </td>
                                            </tr>
                                        
                                    <?php 
                                    }
                                    } else {
                                        ?>
                                            <h5>No Result</h5><br>
                                        <?php
                                    }
                                    } 
                                    ?>
                                
                                    </table>
                                </div>
                        </div>     
                    </div>
                </form>
            </div>
        </section>
        
        <section class="footer">
            <div class="main-container">
                <div class="copyright">
                    <p>© 2021 Vaccinesia</p>
                </div>
            </div>
        </section>
    
        <script src="js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>