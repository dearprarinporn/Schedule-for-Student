<?php
include('condb.php'); // เชื่อมต่อกับฐานข้อมูล

// ตารางรอง
$tables = ['project_member', 'other_related_table'];

// ลบข้อมูลในตารางรอง
foreach ($tables as $table) {
  $query = "DELETE FROM $table WHERE p_id = $user_id";
  mysqli_query($con, $query);
}

// ลบข้อมูลในตารางหลัก
$query = "DELETE FROM member WHERE u_id = $user_id";
mysqli_query($con, $query);

// ปิดการเชื่อมต่อ
mysqli_close($con);
?>