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
    <link rel="stylesheet" href="vaccination_form.css">
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
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </section>

        <section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1>Vaccination Registration</h1>
                    <br>
                    <br>

                    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
                        <div class="container">
                        <div class="card login-card">
                            <div class="row no-gutters">
                                <div class="card-body">
                                <div class="brand-wrapper">
                                    <h1 style="color:#858CE4;" ><a style="color:#858CE4;" href="index.html">Vaccinesia</a></h1>
                                </div>
                                <p class="login-card-description">Registration Form</p>
                                <form method="post" action="#" class="">
                                    <div class="form-group text-left">
                                    <p>Name:</p>
                                        <label for="email" class="sr-only">Name</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p>Address:</p>
                                        <label for="Address" class="sr-only">Address</label>
                                        <input type="text" name="Address" id="Address" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p>Hospital:</p>
                                    <?php 
                                                    $cons = mysqli_connect('localhost', 'root', '');
                                                    mysqli_select_db($cons, 'vaccinesia');

                                                    $result = mysqli_query($cons, "select * from hospital_location");
                                                    $num = mysqli_num_rows($result);

                                                    if ($num > 0) {
                                                    ?>
                                                        <select name="hospital" id="hospital">
                                                    <?php
                                                    while($d = mysqli_fetch_array($result)){
                                                        ?>  

                                                        <option value="<?php echo $d['Hospital'];?>">
                                                            <?php echo $d['Hospital']; ?>
                                                        </option>

                                                        
                                                    <?php 
                                                    }}
                                                    ?>
                                            </select>
                                    </div>
                                    
                                    <div class="form-group mb-4 text-left">
                                            <p>Vaccine Type:</p>
                                            <input type="radio" name="vacType" id="vacType1" value="Sinovac">
                                            <label for="vacType1"class="form-check-label">Sinovac</label>
                                            <br>
                                            <input type="radio" name="vacType" id="vacType2" value="Astrazeneca">
                                            <label for="vacType2" class="form-check-label">Astrazeneca</label>
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p>Phase:</p>

                                    <?php 
                                                    $cons = mysqli_connect('localhost', 'root', '');
                                                    mysqli_select_db($cons, 'vaccinesia');

                                                    $result = mysqli_query($cons, "select * from reg_vac where phase = 1 ");
                                                    $num = mysqli_num_rows($result);

                                                    if ($num == 1) {
                                                    ?>
                                                        <select name="phase" id="phase">
                                                        <option value="2">
                                                            2
                                                        </option>

                                                        
                                                    <?php 
                                                    }else{
                                                    ?>
                                                        <select name="phase" id="phase">
                                                        <option value="1">
                                                            1
                                                        </option>
                                                        <option value="2">
                                                            2
                                                        </option>
                                                    <?php 
                                                    }
                                                    ?>
                                            </select>

                                    
                                    <button name="submit" id="login" class="btn btn-block login-btn mb-4" type="submit">
                                        Register
                                    </button>
                                    <br>
                                    </form>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    </main>
                </div>
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