<?php
include('condb.php');
include('navbar.php');
include('h.php');
include('stylemember.php');


// ตรวจสอบการเข้าสู่ระบบ
if (!isset($_SESSION["u_id"])) {
    header("Location: check.php");
    exit;
}

$u_id = $_SESSION["u_id"];



// ดึงข้อมูลโปรเจกต์ที่ผู้ใช้สร้าง
$sql_my_projects = "SELECT * FROM project WHERE u_id = '$u_id'";
$result_my_projects = mysqli_query($con, $sql_my_projects);

// ดึงข้อมูลโปรเจกต์ที่ไม่ใช่ของผู้ใช้ปัจจุบัน
$sql_all_projects = "SELECT project.p_id, project.p_name FROM project 
INNER JOIN project_member ON project.p_id = project_member.p_id 
WHERE project_member.u_id = '$u_id' ";
$result_all_projects = mysqli_query($con, $sql_all_projects);
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <h1>Project</h1>
        <div class="left">
            <form action="project_create.php" method="post">
                <button type="submit" class="createbtn">Create Project +</button>
        </div>
        <div class="block1">
            <div class="flex-container">
                <h2>My Project</h2>
                <?php
                if (mysqli_num_rows($result_my_projects) > 0) {
                    while ($row = mysqli_fetch_assoc($result_my_projects)) {
                        echo "<p><a href='project_detail.php?p_id={$row['p_id']}'>{$row['p_name']}</a></p>";
                        echo "<p><a href='project_delete.php?p_id={$row['p_id']}'><i class='bx bx-trash'></i></a></p>";
                    }
                } else {
                    echo "<p>No projects found.</p>";
                }
                ?>
            </div>
        </div>
        <div class="block1">
            <div class="flex-container">
                <h2>All Project</h2>
                <?php

                if (mysqli_num_rows($result_all_projects) > 0) {
                    while ($row = mysqli_fetch_assoc($result_all_projects)) {
                        echo "<p><a href='project_detail_member.php?p_id={$row['p_id']}'>{$row['p_name']}</a></p>";
                    }
                } else {
                    echo "<p>No projects found.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>



</html>