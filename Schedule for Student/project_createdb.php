<?php
include('condb.php');
session_start();

$u_id = $_SESSION["u_id"];
$p_name = $_POST["p_name"];
$p_des = $_POST["p_des"];
$p_start_date = $_POST["p_start_date"];
$p_end_date = $_POST["p_end_date"];

$sql = "INSERT INTO project (p_name, p_des, p_start_date, p_end_date, u_id) 
VALUES ('$p_name', '$p_des', '$p_start_date', '$p_end_date', '$u_id')";
$result = mysqli_query($con , $sql);

if($result) {
    echo "<script type='text/javascript'>" ;
    echo "window.location = 'project_create_popup.php';" ; 
    echo "</script>" ;
}

?>
