<!DOCTYPE html>
<html lang="en">
<?php
        include('navbar.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
</head>
<body>

        
    <?php
//include('navbar.php');
//include('h.php');
include('styleadmin.php');
include('../condb.php'); // เชื่อมต่อกับฐานข้อมูล

$query = "SELECT * FROM member WHERE u_email LIKE '%@psu.ac.th' ORDER BY u_id ASC";
$result = mysqli_query($con, $query);

echo '<div class="container mt-5">';
echo '<h1>Manage User</h2>';
echo '<table id="myTable" class="table table-hover">';
echo '<thead class="bg-primary text-white">';
echo '<tr>';
echo '<th>User Id</th>';
echo '<th>Account</th>';
echo '<th>Delete</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row["u_id"] . '</td>';
    echo '<td>' . $row["u_email"] . '</td>';
    echo '<td><a href="manage_user_warning.php?u_id=' .$row["u_id"] . '">Delete</a></td>'; // เพิ่มลิงก์ลบ โดยส่งไอดีของผู้ใช้ไปยังหน้า delete_user.php
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';

mysqli_close($con);
?>
    <div class="container"> <!-- สร้าง container ใหม่สำหรับปุ่ม -->
        <a href="admin.php" class="back-btn">Back to Admin</a> <!-- เพิ่มปุ่มย้อนกลับ -->
    </div>
</body>
</html>
