<?php
include('condb.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['p_id']) && isset($_POST['u_id'])) {
        $p_id = $_POST['p_id'];
        $u_id = $_POST['u_id']; // เนื่องจาก u_ids มีค่าเพียงค่าเดียวเท่านั้น
        
        if ($con->connect_error) {
            die('Connection failed: ' . $con->connect_error);
        }

        // ใช้ค่าเดียวของ $u_id เพื่อแทรกลงในฐานข้อมูล
        $sql = "INSERT INTO project_member (p_id, u_id) VALUES ('".$p_id."', '".$u_id."')";
        if (mysqli_query($con, $sql)) {
            echo "<script type='text/javascript'>" ;

            //echo "Member added successfully";
            echo "window.location = 'success_popup1.php' ; " ; 
            echo "</script>" ;
        } else {
            echo "Error adding member: " . mysqli_error($con);
        }
        
        $con->close();
    } else {
        echo "p_id or u_id not set in POST request";
    }
}
?>
