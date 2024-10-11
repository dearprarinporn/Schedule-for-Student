<!DOCTYPE html>
<html lang="en">

<body>
<div class="block2">

<?php
include('../condb.php');
include('styleadmin.php');
include('navbar.php');

// นับจำนวนสมาชิก
$query_members = "SELECT COUNT(u_id) as total_members FROM member WHERE u_email LIKE '%@psu.ac.th'";
$result_members = mysqli_query($con, $query_members);
$row_members = mysqli_fetch_assoc($result_members);
$total_members = $row_members['total_members'];

// นับจำนวนโปรเจค
$query_projects = "SELECT COUNT(p_id) as total_projects FROM project";
$result_projects = mysqli_query($con, $query_projects);
$row_projects = mysqli_fetch_assoc($result_projects);
$total_projects = $row_projects['total_projects'];

// นับจำนวนกิจกรรม
$query_activities = "SELECT COUNT(*) as total_activities FROM activity";
$result_activities = mysqli_query($con, $query_activities);
$row_activities = mysqli_fetch_assoc($result_activities);
$total_activities = $row_activities['total_activities'];

echo '<div class="container mt-5">';
echo '<h1>Total All</h1>';
echo '<h2>Manage User</h2>';
echo '<p>Total Members: ' . $total_members . '</p>'; // แสดงจำนวนสมาชิก
echo '<h2>Project</h2>';
echo '<p>Total Projects: ' . $total_projects . '</p>'; // แสดงจำนวนโปรเจค
echo '<h2>Activity</h2>';
echo '<p>Total Activities: ' . $total_activities . '</p>'; // แสดงจำนวนกิจกรรม
echo '</div>';

mysqli_close($con);
?>
</div>
<div class="container"> <!-- สร้าง container ใหม่สำหรับปุ่ม -->
        <a href="admin.php" class="back-btn">Back to Admin</a> <!-- เพิ่มปุ่มย้อนกลับ -->
        
    </div>
</body>
<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0; /* เพื่อลบการเว้นระยะขอบทั้งหมด */
            padding: 0; /* เพื่อลบการเว้นระยะขอบทั้งหมด */
        }
        .container {
            text-align: center;
            margin-top: 100px;
            margin-bottom: 50px; /* เพิ่ม margin-bottom เพื่อให้มีระยะห่างด้านล่าง */
        }
        .admin-title {
            font-size: 120px;
            font-weight: bold;
        }
        .manage-btn:hover {
            background-color: #45a049;
            cursor: pointer;
        }
        .header-img {
            width: 100%; /* กำหนดความกว้างของรูปให้เท่ากับความกว้างของหน้าจอ */
            position: absolute; /* กำหนดให้รูปภาพอยู่ในตำแหน่งแน่นหน้าจอ */
            top: 0; /* จัดให้รูปภาพอยู่บนสุดของหน้าจอ */
            left: 0; /* จัดให้รูปภาพอยู่ชิดซ้ายของหน้าจอ */
            z-index: -1; /* กำหนดให้รูปภาพมีลำดับที่ต่ำกว่าเนื้อหาของหน้าเว็บ */
        }
        table {
            width: 80%; /* กำหนดความกว้างของตาราง */
            margin: auto; /* จัดให้ตารางอยู่ตรงกลาง */
            border-collapse: collapse; /* รวมเส้นขอบของเซลล์เข้าด้วยกัน */
            margin-top: 50px; /* เพิ่มระยะห่างด้านบนของตาราง */
        }
        th, td {
            border: 1px solid #ddd; /* เพิ่มเส้นขอบให้กับเซลล์ */
            padding: 8px; /* เพิ่มระยะห่างของข้อความภายในเซลล์ */
            text-align: left; /* จัดตำแหน่งข้อความภายในเซลล์ให้อยู่ชิดซ้าย */
        }
        th {
            background-color: #f2f2f2; /* กำหนดสีพื้นหลังของหัวตาราง */
        }
        .back-btn {
            padding: 10px 20px; /* ปรับขนาดของปุ่มย้อนกลับ */
            background-color: #FF9393; /* กำหนดสีพื้นหลังของปุ่มเป็น FF9393 */
            color: white; /* กำหนดสีข้อความ */
            border: none; /* ลบเส้นขอบ */
            border-radius: 30px; /* กำหนดมุมของปุ่ม */
            text-decoration: none; /* ลบขีดเส้นใต้ข้อความ */
            font-size: 16px; /* กำหนดขนาดตัวอักษร */
            cursor: pointer; /* เปลี่ยนเป็นเคอร์เซอร์เมื่อชี้ */
            display: inline-block; /* กำหนดให้ปุ่มอยู่ในตำแหน่งเดียวกันกับข้อความ */
        }
        .back-btn:hover {
            background-color: #FF7676; /* เปลี่ยนสีพื้นหลังเมื่อชี้ hover */
        }
</style>
</html>