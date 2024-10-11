<?php
include('navbar.php');
include('condb.php');
include('h.php');
include('stylemember.php');


if(isset($_GET['p_id'])) {
    // เชื่อมต่อกับฐานข้อมูล
    // รับค่า project_id ที่ส่งมาจาก URL
    $p_id = $_GET['p_id'];
}

$sql = "SELECT * FROM project where p_id = '$p_id' ";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container"><br>
        <h1>Project Details</h1>
        <div class="block2">
        <?php if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="row row-cols-2"><br><br>
                    <div class="col-sm-6 mt-3"> <h4>Project Name: <?php echo $row["p_name"]; ?><h4></div>

                <div class="row row-cols-2">
                    <div class="col-sm-6 mt-3"> <h4>Description: <?php echo $row["p_des"]; ?></h4></div>
                </div>

                <div class="row row-cols-2">
                    <div class="col-sm-6 mt-3"> <h4>Start Date: <?php echo $row["p_start_date"]; ?></b></div>
                </div>

                <div class="row row-cols-2">
                    <div class="col-sm-6 mt-3"> <h4>End Date: <?php echo $row["p_end_date"]; ?></b></div>
                </div>

                
                    <div class="col-sm-6 mt-3"> <h4>Member</h4></div>
                    <div class="col-sm-6 mt-3">
                        <div class="button"><a href="project_addmember.php?p_id=<?php echo $row['p_id']; ?>"><button class="createbtn">Add Member +</button></a></div>
                    
                        <div class="button">
                            <a href="project_allmember.php?p_id=<?php echo $row['p_id']; ?>"><button class="createbtn1">See All</button></a>
                        </div>
                    </div>
                </div><br>

                <div class="row row-cols-2">
                    <div class="col-sm-6 mt-3"> <h4>Schedule</h4></div>
                    <div class="col-sm-6 mt-3">
                        <div class="button">
                            <a href="project_addactivity.php?p_id=<?php echo $row['p_id']; ?>"><button class="createbtn">Add Activity +</button></a>
                        </div>
                    

                    <div class="col-sm-6 mt-3">
                        <div class="button">
                            <a href="project_allactivity.php?p_id=<?php echo $row['p_id']; ?>"><button class="createbtn1">See All</button></a>
                        </div>
                    </div>
                </div><br>

                <div class="row row-cols-2">
                    <div class="col-sm-6 mt-3"> <h4>Comment</h4></div>
                    <div class="col-sm-6 mt-3">
                        <textarea class="form-control form-control-sm" name="description" rows="5" placeholder="Comment" required></textarea><br>
                    </div>
                </div>
                </div><br><br>
                
                <!-- เพิ่มปุ่ม edit และส่งค่า p_id ไปยังหน้า project_edit -->
                <div class="d-flex justify-content-center">
                <a href="home.php?p_id=<?php echo $row['p_id']; ?>" class="createbtn3">Back</a>
                <a href="project_edit.php?p_id=<?php echo $row['p_id']; ?>" class="createbtn3">Edit</a>
                </div>
                </div>

        <?php 
            }
        } ?>
<br><br>
        <!-- ใช้ d-flex justify-content-center เพื่อจัดให้ปุ่ม "Back" อยู่ตรงกลาง -->
        

</body>

</html>
