<?php include("page_header.php"); 
$account = $_SESSION["user_email"];
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
        
<?php include("page_footer.php"); ?>