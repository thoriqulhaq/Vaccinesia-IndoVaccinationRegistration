<?php include("page_header.php"); ?>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-syringe"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Registered For Vaccination</p>
                                                <?php 
                                                
                                                $cos = mysqli_connect('localhost', 'root', '');
                                                mysqli_select_db($con, 'vaccinesia');

                                                $result3 = mysqli_query($con, "select * from reg_vac where Hospital = '$myvalue'");
                                                $num3 = mysqli_num_rows($result3);
                                                
                                                ?>
                                                <span class="number"><?php echo $num3; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i></i> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-syringe"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Vaccine (Sinovac)</p>
                                                <?php 
                                                $hospitalEmail = $_SESSION['hospital_email'];
                                                $hospitalName = mysqli_query($con, "select hospitalName from hospital where Email = '$hospitalEmail'");
                                                while ($data = $hospitalName->fetch_assoc()) {
                                                    $Hospitaldata = $data['hospitalName'];
                                                }

                                                $result4 = mysqli_query($con, "select Sinovac from hospital_location where hospital = '$Hospitaldata'");
                                                while ($data = $result4->fetch_assoc()) {
                                                    $VaccineData1 = $data['Sinovac']; 
                                                }
                                                ?>
                                                <span class="number"><?php echo $VaccineData1; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i></i> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="green fas fa-syringe"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Vaccine (Astrazeneca)</p>
                                                <?php 
                                                $hospitalEmail = $_SESSION['hospital_email'];
                                                $hospitalName = mysqli_query($con, "select hospitalName from hospital where Email = '$hospitalEmail'");
                                                while ($data = $hospitalName->fetch_assoc()) {
                                                    $Hospitaldata = $data['hospitalName'];
                                                }

                                                $result4 = mysqli_query($con, "select Astrazeneca from hospital_location where hospital = '$Hospitaldata'");
                                                while ($data = $result4->fetch_assoc()) {
                                                    $VaccineData2 = $data['Astrazeneca']; 
                                                }
                                                ?>
                                                <span class="number"><?php echo $VaccineData2; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i></i> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("page_footer.php"); ?>