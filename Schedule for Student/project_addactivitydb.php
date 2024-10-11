<?php
include('navbar.php');
include('condb.php');
include('h.php');
include("stylemember.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all necessary data is received
    if (isset($_POST['pm_id'], $_POST['ac_name'], $_POST['ac_desc'], $_POST['ac_start_date'], $_POST['ac_end_date'])) {
        // Retrieve data from the form
        $pm_id = $_POST['pm_id'];
        $activityName = $_POST['ac_name'];
        $description = $_POST['ac_desc'];
        $startDate = $_POST['ac_start_date'];
        $endDate = $_POST['ac_end_date'];
        //$person = $_POST['person'];

        // Connect to your database
        $con = mysqli_connect("localhost", "root", "", "software_project");

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Prepare SQL statement to insert data into the activity table

        $sql = "INSERT INTO activity (pm_id, ac_name, ac_desc, ac_start_date, ac_end_date) 
                VALUES ('$pm_id','$activityName', '$description', '$startDate', '$endDate')";

        // Execute SQL statement
        if ($con->query($sql) === TRUE) {

            echo "<script type='text/javascript'>";
            //echo "alert('New record created successfully');";
            echo "window.location = 'project_addactivity_warning.php'; ";
            echo "</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        // Close database connection
        $con->close();
    } else {
        // Handle case where not all necessary data is received
        echo "<script type='text/javascript'>";
        echo "alert('New record created not successfully');";
        //echo "window.location = 'Manage User.php'; ";
        echo "</script>";

    }
}
?>