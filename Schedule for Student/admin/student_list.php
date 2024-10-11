<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body style="background-color: #E8F0FF;">

<?php
//include('navbar.php');
//include('h.php');
include('connetbase.php'); // Connect to the database

$query = "SELECT * FROM member ORDER BY u_id ASC";
$result = mysqli_query($con, $query);

echo '<div class="container mt-5">';
echo '<h2>member</h2>';
echo '<table id="myTable" class="table table-hover">';
echo '<thead class="bg-primary text-white">';
echo '<tr>';
echo '<th>User id</th>';
echo '<th>Account</th>';
//echo '<th>ชื่อ</th>';
//echo '<th>นามสกุล</th>';
//echo '<th>เพศ</th>';
//echo '<th>หลักสูตร</th>';
//echo '</tr>';
//cho '</thead>';
//echo '<tbody>';

while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row["u_id"] . '</td>';
    echo '<td>' . $row["u_email"] . '</td>';
    //echo '<td>' . $row["s_firstname"] . '</td>';
    //echo '<td>' . $row["s_lastname"] . '</td>';
    //echo '<td>' . $row["s_gender"] . '</td>';
    //echo '<td>' . $row["s_major"] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';

mysqli_close($con);
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

</body>
</html>

