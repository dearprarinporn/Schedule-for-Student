<?php
// เชื่อมต่อฐานข้อมูล
include('condb.php');
// เรียกใช้งาน navbar.php
include('navbar.php');
include("h.php");
include("stylemember.php");
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container">
        <h1>Create Project</h1><br>
        <div class="block2">
        <form action="project_createdb.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"> <h4>Project Name</h4></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="p_name" placeholder="Project Name" required><br>
                </div>
                
                <div class="col-sm-6 mt-3"> <h4>Description</h4></div>
                <div class="col-sm-6 mt-3">
                    <textarea class="form-control form-control-sm" name="p_des"  rows="5" placeholder="Description" required></textarea><br>
                </div>

                <div class="col-sm-6 mt-3"> <h4>Start Date</h4></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="date" name="p_start_date"  required><br>
                </div>
                
                <div class="col-sm-6 mt-3"> <h4>End Date</h4></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="date" name="p_end_date"  required><br>
                </div>

            </div>
            </div>
            

            <!-- ปุ่ม "Create" ที่เป็นปุ่ม submit สำหรับส่งค่าฟอร์ม -->
            
        <!-- ปุ่ม "Back" -->
        <div class="d-flex justify-content-center">
        <button type="submit" class="createbtn3">Create</button>
            <a href="home.php" class="createbtn3">Back</a>
        </div>
    </div>
    </form>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom Script -->
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.querySelector("input[name='p_pass']");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>