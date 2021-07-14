
<?php include("page_header.php"); 

error_reporting(0);
    $result1 = mysqli_query($con, "SELECT * from reg_vac where VaccineID = '" . $_GET["vaccineid"] . "'");
    $num1 = mysqli_num_rows($result1);

    $status = $_POST["Status"];

    if (isset($_POST["submit"])) {
        $reg = "UPDATE reg_vac SET Status= '$status' WHERE VaccineID = '" . $_GET["vaccineid"] . "'";
        mysqli_query($con, $reg);
        echo "<script>alert('Update Successful')</script>";
        echo "<script>location.href='hospital_vaccine_registration.php'</script>"; }

    if ($num1 == 1) {
        while($account1 = mysqli_fetch_array($result1)) {
?>

<section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">

                    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
                        <div class="container">
                        <div class="card login-card" style="border-radius: 30px; padding: 20px;">
                            <div class="row no-gutters">
                                <div class="card-body">
                                <div class="brand-wrapper">
                                    <h1 style="color:#858CE4;" ><a style="color:#858CE4;" href="index.html">Vaccinesia</a></h1>
                                </div>
                                <p class="login-card-description">Edit Status</p>
                                <form method="post">
                                    <div class="form-group text-left">
                                    <p><b>Name:</b></p>
                                    <?php echo $account1['Name']; ?>
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p><b>Address:</b></p>
                                    <?php echo $account1['Address']; ?>
                                    </div>
                                    <div class="form-group mb-4 text-left">
                                    <p><b>Hospital:</b></p>
                                    <?php echo $account1['Hospital']; ?>
                                    </div>
                                    
                                    <div class="form-group mb-4 text-left">
                                    <p><b>Vaccine Type:</b></p>
                                    <?php echo $account1['VaccineType']; ?>
                                    </div>

                                    <div class="form-group mb-4 text-left">
                                    <p><b>Phase:</b></p>
                                    <?php echo $account1['Phase']; ?>
                                    </div>
                                        
                                    <div class="form-group mb-4 text-left">
                                    <p><b>Date:</b></p>
                                    <?php echo $account1['Date']; ?>
                                    </div>

                                    <div class="form-group mb-4 text-left" id="vacType">
                                    <?php $status = $account1['Status']; 
                                            if($status == 'Unvaccinated') { ?>
                                            <p><b>Status:</b></p>
                                            <input type="radio" name="Status" id="Status1" value="Unvaccinated" checked>
                                            <label for="Status1"class="form-check-label">Unvaccinated</label>
                                            <br>
                                            <input type="radio" name="Status" id="Status2" value="Vaccinated">
                                            <label for="Status2" class="form-check-label">Vaccinated</label>

                                        <?php } else if($status == 'Vaccinated')  {?>
                                            <p><b>Status:</b></p>
                                            <input type="radio" name="Status" id="Status1" value="Unvaccinated">
                                            <label for="Status1"class="form-check-label">Unvaccinated</label>
                                            <br>
                                            <input type="radio" name="Status" id="Status2" value="Vaccinated" checked>
                                            <label for="Status2" class="form-check-label">Vaccinated</label>
                                        <?php }?>
                                    </div>

                                    <br>
                                    <button name="submit" id="submit" class="btn login-btn mb-4 btn btn-outline-success" type="submit">
                                        Save
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
<?php }} ?>

<?php include("page_footer.php"); ?>