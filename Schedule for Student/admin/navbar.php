<?php
include('../condb.php');
include('../h.php');
session_start();

$query = "SELECT * from member where u_id = '" . $_SESSION["u_id"] . "' ; ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
extract($row);
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

  <nav class="navbar">
    <a href="admin.php">
      <img src="../pics/logo.png" alt="Logo" />
    </a>
    <div class="right">
      <span class="navbar-brand">
        <?php echo $u_name; ?>
      </span>
      <button class="btn" onclick="window.location.href='../logout.php'">Log out</button>
    </div>
  </nav>
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      background-color: #fff;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #F3F3F3;
      color: #fff;
      padding: 10px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .navbar img {
      width: 70px;
      height: 70px;

    }

    .navbar .navbar-brand {
      font-size: 18px;
      color: black;
      margin-right: 60px;
      font-weight: bold;
    }

    .navbar .btn {
      width: 150px;
            height: 40px;
            background-color: #FF9999;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #dc3545;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
    }

    .navbar .btn:hover {
      background-color: #dc3545;
      color: #fff;
    }
  </style>
</body>

</html>