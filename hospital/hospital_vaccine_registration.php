<?php 
include("page_header.php"); ?>
            <section class="ftco-section">
                <div class="container">
                <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <br>
                            <br>
                            <h2 class="heading-section">Vaccine Registration</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">
                            <div class="bg-white p-4 border rounded">	
                                <?php 
                                            $province = null;

                                            $result = mysqli_query($con, "select * from reg_vac where Hospital = '$myvalue'");
                                            $num = mysqli_num_rows($result);

                                            if ($num > 0) {
                                            ?>
                                                <h5><?php echo $num; ?> Result</h5><br>
                                                <table class="table table-responsive-xl">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Hospital</th>
                                                            <th>Vaccine Type</th>
                                                            <th>Phase</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Edit</th>
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
                                                        <td> <?php echo $d['Date']; ?> </td>
                                                        <td> <?php echo $d['Status']; ?> </td>
                                                        <td> <a href="edit_vaccine_registration.php?vaccineid=<?php echo $d['VaccineID']; ?>" name="delete" type="button" class="btn btn-success">Edit</a></td>
                                                    </tr>
                                                </tbody>

                                                <?php } } else { ?>
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
        </div>
    </div>
<?php include("page_footer.php"); ?>