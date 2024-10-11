<?php
include('condb.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าที่ส่งมาจากฟอร์ม
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_des = $_POST['p_des'];
    $p_start_date = $_POST['p_start_date'];
    $p_end_date = $_POST['p_end_date'];

    // อัปเดตข้อมูลในฐานข้อมูล
    $sql = "UPDATE project SET p_name='$p_name', p_des='$p_des', p_start_date='$p_start_date', p_end_date='$p_end_date' WHERE p_id='$p_id'";

    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>" ;

            //echo "Member added successfully";
            echo "window.location = 'success_popup2.php' ; " ; 
            echo "</script>" ;
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>