<?php 
    include('condb.php');

    $u_name = $_POST["u_name"] ;
    $u_pass = $_POST["u_pass"] ;
    $u_email = $_POST["u_email"] ;

    $sql = "INSERT INTO member (u_name, u_pass, u_email) VALUES ('$u_name', '$u_pass', '$u_email')";
    $result = mysqli_query($con , $sql) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        //echo "alert('Successfully registered') ; " ;
        echo "window.location = 'register_popup.php' ; " ; 
        echo "</script>" ;
    }
?>