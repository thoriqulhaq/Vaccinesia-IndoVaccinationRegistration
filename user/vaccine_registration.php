<?php 
    
$identifier = 1;
include("page_header.php"); 
$account = $_SESSION["user_email"];

if (session_id() == '' || !isset($_SESSION['user_email'])) {

    echo "<script>alert('You have to login first')</script>";
    echo "<script>location.href='user_login.php'</script>";

} else {

    error_reporting(0);

    session_start();

    $result1 = mysqli_query($con, "select * from user where Email = '$account' ");
    $num1 = mysqli_num_rows($result1);                                                    

    while ($info = $result1->fetch_assoc()) {
        $myvalue = $info['Name'];
    }

    $result = mysqli_query($con, "select * from reg_vac where name = '$myvalue'");
    $num = mysqli_num_rows($result);
    if ($num < 2) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $hospital = $_POST['hospital'];
    $vacType = $_POST['vacType'];
    $phase = $_POST['phase'];
    $date = $_POST['date'];

        if (isset($_POST["submit"])) {
            $reg = "insert into reg_vac (name, address, hospital, vaccineType, phase, date, status) 
                    values ('$name', '$address', '$hospital', '$vacType', '$phase', '$date', 'Unvaccinated')";
            mysqli_query($con, $reg);
            echo "<script>alert('Registration Successful')</script>";
            echo "<script>location.href='vaccine_registration.php'</script>";


            if($vacType == 'Sinovac') {
            $vaccine = mysqli_query($con, "select Sinovac from hospital_location where hospital = '$hospital'");
            while ($data = $vaccine->fetch_assoc()) {
                $VaccineData = $data['Sinovac'];
                $updateVaccine = ($VaccineData - 1);
                $update = "UPDATE hospital_location SET Sinovac='$updateVaccine' WHERE hospital = '$hospital'";
                mysqli_query($con, $update);
            }
            } else if($vacType == 'Astrazeneca') {
                $vaccine = mysqli_query($con, "select Astrazeneca from hospital_location where hospital = '$hospital'");
                while ($data = $vaccine->fetch_assoc()) {
                    $VaccineData = $data['Astrazeneca'];
                    $updateVaccine = ($VaccineData - 1);
                    $update = "UPDATE hospital_location SET Astrazeneca='$updateVaccine' WHERE hospital = '$hospital'";
                    mysqli_query($con, $update);
            }
        } }
?>
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
                                        <label for="name" class="sr-only">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p>Address:</p>
                                        <label for="Address" class="sr-only">Address</label>
                                        <input type="text" name="address" id="Address" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p>Hospital:</p>
                                    <?php 

                                                    $result = mysqli_query($con, "select * from hospital_location");
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
                                    
                                    <div class="form-group mb-4 text-left" id="vactype">
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
                                                    $result1 = mysqli_query($con, "select * from user where Email = '$account' ");
                                                    $num1 = mysqli_num_rows($result1);                                                    
                                                
                                                    while ($info = $result1->fetch_assoc()) {
                                                        $myvalue = $info['Name'];
                                                    }
                                                
                                                    $result = mysqli_query($con, "select * from reg_vac where name = '$myvalue'");
                                                    $num = mysqli_num_rows($result);
                                                    if ($num == 1) {
                                                    ?>
                                                    
                                                        <select name="phase" id="phase">
                                                        <option value="2">
                                                            2
                                                        </option>

                                                        
                                                    <?php 
                                                    }else if($num < 1) {
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
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                            <p>Date:</p>
                                            <input type="date" name="date" id="date">
                                    
                                    </div>

                                    
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
        
<?php include("page_footer.php");
} else {
    echo "<script>alert('You already completed 2 phases of vaccination')</script>";
    echo "<script>location.href='index.php'</script>";
}}
?>