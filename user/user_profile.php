<?php include("page_header.php");
 $account = $_SESSION["user_email"];
?>

            </div>
</section>
        <section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1>Profile</h1>
                </div>

                <?php 
                     $province = null;
                ?>

                <div class="hero-subtitle">

                    <?php 
                         $result1 = mysqli_query($con, "select * from user where Email = '$account' ");
                         $num1 = mysqli_num_rows($result1);
                        
                         if ($num1 == 1) {
                            while($account1 = mysqli_fetch_array($result1)){
                            ?>
                    

                    <h5>Profile Inforamtion:</h5>
                    <br>
                    <p>Name: <?php echo $account1['Name']; ?> </p>
                    <p>Phone Number: (+62) <?php echo $account1['PhoneNum']; ?> </p>
                    <p>Email: <?php echo $account1['Email']; ?> </p>
                    <p>Password: <?php echo $account1['Password']; ?> </p>

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
                                                    while ($info = $result1->fetch_assoc()) {
                                                        $myvalue = $info['Name'];
                                                    }

                                                    $result = mysqli_query($con, "select * from reg_vac where name = '$myvalue'");
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
                                                            <h5>No History</h5><br>
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
    
        
<?php include("page_footer.php"); ?>