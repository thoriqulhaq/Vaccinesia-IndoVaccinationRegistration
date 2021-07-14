<?php
include("page_header.php");
$account = $_SESSION["hospital_email"];

error_reporting(0);

$hospital = "SELECT HospitalName from hospital WHERE Email = '$account'";
$result123 = mysqli_query($con, $hospital); 
$data  = mysqli_fetch_array($result123);
$hospitalName = $data['HospitalName'];


$query4 = "SELECT * FROM hospital_location WHERE Hospital = '$hospitalName'";
$result2 = mysqli_query($con, $query4);
$data1  = mysqli_fetch_array($result2);

if(isset ($_POST['sinovac'])) {
    $newsinovac = $_POST['newsinovac'];

    $query5 = "UPDATE hospital_location SET Sinovac = '$newsinovac' WHERE Hospital = '$hospitalName' ";
    $result3 = mysqli_query($con, $query5);
    echo "<script>'location.href=vaccine.php'</script>";
    echo "<script>alert('Vaccine Stock Updated')</script>";
    
}

if(isset ($_POST['astrazeneca'])) {
    $newastrazeneca = $_POST['newastrazeneca'];

    $query6 = "UPDATE hospital_location SET Astrazeneca = '$newastrazeneca' WHERE Hospital = '$hospitalName' ";
    $result4 = mysqli_query($con, $query6);

   echo "<script>'location.href=vaccine.php'</script>";
   echo "<script>alert('Vaccine Stock Updated')</script>";
}



?>
<div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <br>
                            <br>
                            <h2 class="heading-section">Vaccine Stock Management</h2>
                        </div>
                    </div>
    <div class="bg-white p-5 border rounded">
    <form method="POST">
        <table class="table table-responsive-xl">
        <thead>
            <tr>
                <th>Vaccine</th>
                <th>Doses</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sinovac</td>
                <td><input name="newsinovac" class="form-control" type="number" placeholder="<?php echo $data1['Sinovac'] ?>"></td>
                <td><button name="sinovac" class="btn btn-success">Update</button></td>
            </tr>
            <tr>
                <td>Astrazeneca</td>
                <td><input name="newastrazeneca" class="form-control" type="number" placeholder="<?php echo $data1['Astrazeneca'] ?>"></td>
                <td><button name="astrazeneca" class="btn btn-success">Update</button></td>
            </tr>
        </tbody>
        </table>
    </form>
    </div>
</div>

<?php
include("page_footer.php"); 
?>