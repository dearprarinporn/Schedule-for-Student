<?php
include('navbar.php');
include('condb.php');
include('h.php');
include("stylemember.php");
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <h1>Activity</h1>
        <div class="block2"><br>
        <table class="form-table">
        <form action="project_addactivity_memberdb.php" method="post">
            <tr>
                <th><label for="activityName">Activity Name:</label></th>
                <td><input type="text" id="ac_name" name="ac_name" placeholder="Enter Activity Name" required></td>
            </tr>
            <tr>
                <th><label for="pm_id">Person:</label></th>
                <td>
                    <select id="pm_id" name="pm_id" required>
                        <option value="">Person</option>

                        <?php
                        if (isset($_GET['p_id']) && !empty($_GET['p_id'])) {
                            // Get the project ID from the query string
                            $p_id = $_GET['p_id'];
                        }

                        // Check connection
                        if ($con->connect_error) {
                            die("Connection failed: " . $con->connect_error);
                        }

                        // Query to fetch persons from the database
                        $sql = "SELECT pm.pm_id, m.u_email FROM project_member pm JOIN member m ON m.u_id = pm.u_id WHERE pm.p_id ='$p_id' ";
                        $result = $con->query($sql);

                        // Populate select options with pm_id and email
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["pm_id"] . "'>" . $row["u_email"] . "</option>";
                            }
                        }

                        $con->close();
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="description">Description:</label></th>
                <td><textarea id="ac_desc" name="ac_desc" rows="4" placeholder="Project Description"
                        required></textarea></td>
            </tr>
            <tr>
                <th><label for="startDate">Start Date:</label></th>
                <td><input type="date" id="ac_start_date" name="ac_start_date" required></td>
            </tr>
            <tr>
                <th><label for="endDate">End Date:</label></th>
                <td><input type="date" id="ac_end_date" name="ac_end_date" required></td>
            </tr>
        </table>
        <!-- ปุ่ม "Create" ที่เป็นปุ่ม submit สำหรับส่งค่าฟอร์ม -->
        <div class="block-but">
        <button type="submit" class="create-button">Create</button>
        <div class="form-buttons">
                <button type="button" class="createbtn3" onclick="window.history.back()">Back</button>
                <div class="button">
                </div>
        </form>
</body>
</html>