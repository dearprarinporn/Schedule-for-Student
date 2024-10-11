<?php
include('condb.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ac_id = $_POST['ac_id'];
    $pm_id = $_POST['pm_id'];

    $sql = "DELETE FROM activity WHERE ac_id = '$ac_id' AND pm_id = '$pm_id'";
    if (mysqli_query($con, $sql)) {
        echo "Success deleting record: ";
        echo "window.location = 'project_delete_activity.php' ; ";
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
