<?php
include_once '../config.php';
$sql = "DELETE FROM admin WHERE adminid='" . $_GET["adminid"] . "'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Record deleted successfully')</script>";
    header ("Location: admin_account.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>