<?php
include_once '../config.php';
$sql = "DELETE FROM user WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Record deleted successfully')</script>";
    header ("Location: admin_user_account.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>