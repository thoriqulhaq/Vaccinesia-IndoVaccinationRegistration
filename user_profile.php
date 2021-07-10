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
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </section>

        <section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1>Profile</h1>
                </div>

                <?php 
                     $cons = mysqli_connect('localhost', 'root', '');
                     mysqli_select_db($cons, 'vaccinesia');
                     $province = null;
                ?>

                <div class="hero-subtitle">

                    <?php 
                         $result1 = mysqli_query($cons, "select * from user where UserID = 1 ");
                         $num = mysqli_num_rows($result1);
                        
                         if ($num == 1) {
                            while($d = mysqli_fetch_array($result1)){
                            ?>
                    

                    <h5>Profile Inforamtion:</h5>
                    <br>
                    <p>Name: <?php echo $d['Name']; ?> </p>
                    <p>Phone Number: (+62) <?php echo $d['PhoneNum']; ?> </p>
                    <p>Email: <?php echo $d['Email']; ?> </p>
                    <p>Password: <?php echo $d['Password']; ?> </p>

                    <?php 
                        }
                    }
                    ?>
                     
                </div>

                <div class="hero-subtitle">
                    <h5>History:</h5>
                    <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-wrap">	
                                        <?php 

                                                    $result = mysqli_query($cons, "select * from reg_vac");
                                                    $num = mysqli_num_rows($result);

                                                    if ($num > 0) {
                                                    ?>
                                                        <table class="table table-responsive-xl">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Address</th>
                                                                    <th>Hospital</th>
                                                                    <th>Vaccine Type</th>
                                                                    <th>Phase</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                    <?php
                                                    while($d = mysqli_fetch_array($result)){
                                                        ?>  
                                                        <tbody>
                                                            <tr>
                                                                <td> <?php echo $d['Name']; ?> </td>
                                                                <td> <?php echo $d['Address']; ?> </td>
                                                                <td> <?php echo $d['Hospital']; ?> </td>      
                                                                <td> <?php echo $d['VaccineType']; ?> </td>
                                                                <td> <?php echo $d['Phase']; ?> </td>
                                                                <td> <?php echo $d['Status']; ?> </td>
                                                            </tr>
                                                        </tbody>
                                                        
                                                    <?php 
                                                    }
                                                    } else {
                                                        ?>
                                                            <h5>No Result</h5><br>
                                                        <?php
                                                    }
                                                    ?>
                                            </table>
                                    </div>
                                </div>
                            </div>
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