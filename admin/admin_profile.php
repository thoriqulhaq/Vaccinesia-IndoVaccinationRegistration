<?php include("page_header.php");
 $account = $_SESSION["admin_email"];
 
 error_reporting(0);
 $submit = $_POST['submit123'];


if(isset ($submit)) {

                
$password  = $_POST['Password'];
$newpassword1 = $_POST['newPass1'];
$newpassword2 = $_POST['newPass2'];

$query4 = "SELECT Password FROM admin WHERE Email = '$account'";
$result2 = mysqli_query($con, $query4);
$data  = mysqli_fetch_array($result2);

if ($data['Password'] == md5($password))
{
   
    if ($newpassword1 == $newpassword2)
    {
       
         
        $newencryptedpassword = md5($newpassword1);
         
        $query5 = "UPDATE admin SET Password = '$newencryptedpassword' WHERE Email = '$account' ";
        $result3 = mysqli_query($con, $query5);
        
        if ($result3) echo "<script>alert('Password Changed')</script>";
    }
    else echo "<script>alert('Incorrect New Password')</script>";
}
else echo "<script>alert('Current Password is Incorrect')</script>";
}

?>
        <section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1>Admin Profile</h1>
                </div>

                <?php 
                     $province = null;
                ?>

                <div class="hero-subtitle">

                    <?php 
                         $result1 = mysqli_query($con, "select * from admin where Email = '$account' ");
                         $num1 = mysqli_num_rows($result1);
                        
                         if ($num1 == 1) {
                            while($account1 = mysqli_fetch_array($result1)){
                            ?>
                    

                    <h5>Admin Profile Information:</h5>
                    <br>
                    <p>Name: <?php echo $account1['Name']; ?> </p>
                    <p>Email: <?php echo $account1['Email']; ?> </p>

                    <?php 
                        }
                    }
                    ?>
                     
                     <br>
                    <div class="bg-white p-2 border rounded" style="width:fit-content">
                        <form method="POST" action="" align="left">
                        <table>
                            <tr>
                                <td>Old Password</td>
                                <td>: </td>
                                <td><input class="form-control" type="password" name="Password" required></td>
                            <tr>
                            <tr>
                                <td>New Password</td>
                                <td>: </td>
                                <td><input class="form-control" type="password" name="newPass1" required></td>
                            <tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>: </td>
                                <td><input class="form-control" type="password" name="newPass2" required></td>
                            <tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                        </table>
                        <button class="btn btn-danger" type="submit" name="submit123">Change</button>
                            <tr>
                    </form>
                    </div>

                </div>

                
                </div>
            </div>
        </section>
    
        
<?php include("page_footer.php"); ?>