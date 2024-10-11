<?php
include('condb.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_id = $_POST['p_id'];
    $u_id = $_POST['u_id'];

    $sql = "DELETE FROM project_member WHERE p_id = '$p_id' AND u_id = '$u_id'";
    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
