<?php
include("condb.php");

session_start();

$u_email = $_POST['u_email'];
$u_pass = $_POST['u_pass'];

$query = "SELECT * from member where u_email = '$u_email' AND u_pass = '$u_pass' ; ";
$result = mysqli_query($con, $query);



if ($result->num_rows == 1) {

    if (strpos($u_email, '@psu.ac.th') !== false) {

        $row = mysqli_fetch_array($result);
        extract($row);

        $query1 = "SELECT * from member where u_email = '$u_email' ; ";
        $result1 = mysqli_query($con, $query1);
        $row1 = mysqli_fetch_array($result1);
        extract($row1);

        $_SESSION["u_email"] = $u_email;
        $_SESSION["u_id"] = $u_id;

        echo "<script type='text/javascript'>";
        echo "window.location = 'home.php' ; ";
        //header("Location:home.php");
        echo "</script>";
    }

    if ($u_email == 'admin@gmail.com') {

        $query2 = "SELECT * from member where u_email = '$u_email' AND u_pass = '$u_pass' ; " ;
        $result2 = mysqli_query($con, $query2);
        $row2 = mysqli_fetch_array($result2);
        extract($row2);

        $_SESSION["u_email"] = $u_email;
        $_SESSION["u_id"] = $u_id;
        
        echo "<script type='text/javascript'>";
        echo "window.location = './admin/admin.php' ; ";
        echo "</script>";
    }

}

if ($result->num_rows == 0) {
    echo "<script type='text/javascript'>";
    echo "window.location = 'login_warning.php ' ; ";
    echo "</script>";
}


//if (isset($_POST['u_email']) && isset($_POST['u_pass'])) 
//{

    // ใช้ prepared statement เพื่อป้องกันการโจมตี SQL Injection
  //  $sql = "SELECT * FROM member WHERE u_email='".$u_email."' 
  //  AND u_pass='".$u_pass."' ";
  //  $result = mysqli_query($con,$sql);

  //  if (mysqli_num_rows($result) == 1) {
    //    $row = mysqli_fetch_array($result);
    //    $_SESSION["u_email"] = $row["u_email"];
    //    $_SESSION["u_pass"] = $row["u_pass"];
    //    header("Location:home.php");
        
   // } else {
    //    echo "<script type='text/javascript'>";
    //   echo "alert('User & Password Incorrect. Please try logging in again.');";
    //    echo "window.history.back()";
    //    echo "</script>";
    //}
//} else {
  //  header("Location:index.php");

?>