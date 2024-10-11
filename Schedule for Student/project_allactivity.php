<?php
include('navbar.php');
include('condb.php');
include('h.php');
include('stylemember.php');

if (isset($_GET['p_id'])) {
    // เชื่อมต่อกับฐานข้อมูล
    // รับค่า project_id ที่ส่งมาจาก URL
    $p_id = $_GET['p_id'];
}

$sql = "SELECT * FROM activity a INNER JOIN project_member pm ON a.pm_id = pm.pm_id INNER JOIN member m ON pm.u_id = m.u_id WHERE a.pm_id = pm.pm_id AND pm.p_id = '$p_id'";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>

<div class="container">
    <h1>All activity</h1><br>
    <div class="block2">
    <table class="table">
        <thead>
            <tr>
                <th>Member Name</th>
                <th>Activity Name</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th></th> <!-- Added column for action -->
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row["u_name"]; ?></td>
                    <td><?php echo $row["ac_name"]; ?></td>
                    <td><?php echo $row["ac_desc"]; ?></td>
                    <td><?php echo $row["ac_start_date"]; ?></td>
                    <td><?php echo $row["ac_end_date"]; ?></td>
                    <td>
    <!-- Delete button with form -->
    <form method="post" action="project_delete_activity.php">
        <input type="hidden" name="ac_id" value="<?php echo $row['ac_id']; ?>">
        <input type="hidden" name="pm_id" value="<?php echo $row['pm_id']; ?>">
        <button type="submit" class="createbtn2" onclick="return confirm('Are you sure you want to delete this activity?')">Delete</button>
    </form>
</td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<div class="d-flex justify-content-center mt-3">
    <a href="project_detail.php?p_id=<?php echo $p_id; ?>" class="createbtn3">Back</a>
</div>
</div>
</body>
</html>
