
<?php 
include("page_header.php"); 
$account = $_SESSION["admin_email"];
?>

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <br>
                            <br>
                            <h2 class="heading-section">Admin Account Management</h2>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">	
                                <?php 
                                            
                                            $cons = mysqli_connect('localhost', 'root', '');
                                            mysqli_select_db($cons, 'vaccinesia');
                                            $province = null;

                                            $result = mysqli_query($cons, "select * from admin");
                                            $num = mysqli_num_rows($result);

                                            if ($num > 0) {
                                            ?>
                                                <h5><?php echo $num; ?> Result</h5><br>
                                                <table class="table table-responsive-xl">
                                                    <thead>
                                                        <tr>
                                                            <th>Admin</th>
                                                            <th>Email</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                            <?php
                                            while($d = mysqli_fetch_array($result)){
                                                ?>  
                                                <tbody>
                                                    <tr>
                                                        <td> <?php echo $d['Name']; ?> </td>
                                                        <td> <?php echo $d['Email']; ?> </td>
                                                        <td><a href="admin_delete_account.php?adminid=<?php echo $d["AdminID"]; ?>" name="delete" type="button" class="btn btn-danger">Delete</a></td>
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

                                    <a href="admin_add_account.php" name="add" class="btn btn-success">Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
<?php include("page_footer.php"); ?>