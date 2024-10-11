<?php
include('navbar.php');
include('condb.php');
include('h.php');
include('stylemember.php');

if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
}

$sql = "SELECT m.u_id, m.u_name, m.u_email FROM member m JOIN project_member pm ON m.u_id = pm.u_id WHERE pm.p_id = '$p_id'";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

    <div class="container"><br>
        <h1>All Members</h1><br>

        <div class="block2">
            <table class="form-table">
                <?php if (mysqli_num_rows($result) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Member Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $row["u_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["u_email"]; ?>
                                        </td>
                                        <td>
                                            <form action="delete_member.php" method="POST">
                                                <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
                                                <input type="hidden" name="u_id" value="<?php echo $row['u_id']; ?>">
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </table>
            </div>
        <?php } else { ?>
            <p>No members found.</p>
        <?php } ?>

        <div class="d-flex justify-content-center">
            <a href="project_detail_member.php?p_id=<?php echo $p_id; ?>" class="createbtn3">Back</a>
        </div>

    </div>

</body>

</html>