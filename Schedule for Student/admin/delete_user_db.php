<?php
include('../condb.php');

if(isset($_GET['u_id'])) {
    $u_id = $_GET['u_id'];

    }

// Delete related records first
$sql_delete_activity = "DELETE FROM activity WHERE pm_id IN (SELECT pm_id FROM project_member WHERE u_id = '$u_id')";
$result_delete_activity = mysqli_query($con, $sql_delete_activity);

$sql_delete_project_member = "DELETE FROM project_member WHERE u_id = '$u_id'";
$result_delete_project_member = mysqli_query($con, $sql_delete_project_member);

// Then delete from the parent table
$sql_delete_member = "DELETE FROM member WHERE u_id = '$u_id'";
$result_delete_member = mysqli_query($con, $sql_delete_member);

if($result_delete_member) {
    echo "<script type='text/javascript'>";
    //echo "alert('ลบข้อมูลนักศึกษาสำเร็จ');";
    echo "window.location = 'success_popup.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สำเร็จ กรุณาดำเนินการใหม่อีกครั้ง');";
    echo "</script>";
}
?>
