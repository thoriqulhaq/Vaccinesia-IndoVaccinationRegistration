<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account - Hospital</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link rel="shortcut icon" type="image" href="./img/KemenKes-logo-bw.png"/>
    <link href="assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="img/logo_vaccinesia.jpg" alt="Vaccinesia" class="vaccinesia-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="admin_panel.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user"></i> Account</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="admin_account.php"><i class="fas fa-angle-right"></i> Admin</a>
                        </li>
                        <li>
                            <a href="user_account.php"><i class="fas fa-angle-right"></i> User</a>
                        </li>
                        <li>
                            <a href="hospital_account.php"><i class="fas fa-angle-right"></i> Hospital</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="vacinne_registration_admin.php"><i class="fas fa-syringe"></i> Vaccine Registration</a>
                </li>
                <li>
                    <a href="hospital_list.php"><i class="fas fa-hospital"></i> Hospital List</a>
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
                                <a href="" class="nav-item nav-link dropdown-toggle text-light" data-toggle="dropdown"><i class="fas fa-user"></i> <span>    Unknown</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <br>
                    <br>
					<h2 class="heading-section">Hospital List</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">	
                        <?php 
                                    
                                    $cons = mysqli_connect('localhost', 'root', '');
                                    mysqli_select_db($cons, 'vaccinesia');
                                    $province = null;

                                    $result = mysqli_query($cons, "select * from hospital_location");
                                    $num = mysqli_num_rows($result);

                                    if ($num > 0) {
                                    ?>
                                        <h5><?php echo $num; ?> Result</h5><br>
                                        <table class="table table-responsive-xl">
                                            <thead>
                                                <tr>
                                                    <th>Province</th>
                                                    <th>City</th>
                                                    <th>Hospital</th>
                                                    <th>Sinovac</th>
                                                    <th>Astrazeneca</th>
                                                </tr>
                                            </thead>
                                    <?php
                                    while($d = mysqli_fetch_array($result)){
                                        ?>  
                                        <tbody>
                                            <tr>
                                                <td> <?php echo $d['Province']; ?> </td>
                                                <td> <?php echo $d['City']; ?> </td>
                                                <td> <?php echo $d['Hospital']; ?> </td>      
                                                <td> <?php echo $d['Sinovac']; ?> Doses</td>
                                                <td> <?php echo $d['Astrazeneca']; ?> Doses</td>
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
	</section>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>