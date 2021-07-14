<?php
include_once '../config.php';
$sql = "DELETE FROM hospital WHERE hospitalid='" . $_GET["hospitalid"] . "'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Record deleted successfully')</script>";
    header ("Location: admin_hospital_account.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>