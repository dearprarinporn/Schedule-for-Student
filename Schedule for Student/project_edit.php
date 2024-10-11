<?php
include('navbar.php');
include('condb.php');
include('h.php');
include('stylemember.php');

if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];

    // ดึงข้อมูลโปรเจ็กต์จากฐานข้อมูล
    $sql = "SELECT * FROM project WHERE p_id = '$p_id'";
    $result = mysqli_query($con, $sql);

    // ตรวจสอบว่ามีข้อมูลโปรเจ็กต์หรือไม่
    if (mysqli_num_rows($result) > 0) {
        $project = mysqli_fetch_assoc($result);
    } else {
        echo "Project not found.";
        exit;
    }
} else {
    echo "Project ID not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
</head>

<body>

    <div class="container text-center bg-body-secondary mt-3">
        <h2>Edit Project</h2>
        <div class="block2">
            <form action="project_editdb.php" method="post">
                <input type="hidden" name="p_id" value="<?php echo $project['p_id']; ?>">

                <div class="form-group row">
                    <label for="projectName" class="col-sm-3 col-form-label">Project Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="projectName" name="p_name"
                            value="<?php echo $project['p_name']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-3 col-form-label">Description:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="description" name="p_des"
                            rows="5"><?php echo $project['p_des']; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="startDate" class="col-sm-3 col-form-label">Start Date:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="startDate" name="p_start_date"
                            value="<?php echo $project['p_start_date']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="endDate" class="col-sm-3 col-form-label">End Date:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="endDate" name="p_end_date"
                            value="<?php echo $project['p_end_date']; ?>">
                    </div>
                </div>
                <br><br>
                <div class="col-sm-9 offset-sm-3">
        <a href="home.php" class="createbtn3">Back</a>
    </div><br>
                <div class="form-group row">
        <div class="col-sm-9 offset-sm-3">
            <button type="submit" href="project_editdb.php" class="createbtn3">Submit</button>
        </div>
            </form>
        </div>
    </div>

    
    </div>
    </form>


    </div>

</body>

</html>