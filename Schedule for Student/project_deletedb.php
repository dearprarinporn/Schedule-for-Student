<?php
include('condb.php');  
if(isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];

	echo "Project ID: " . $p_id;
}
 
$sql = "DELETE FROM project WHERE p_id='$p_id' ";
$result = mysqli_query($con, $sql) 
or die ("Error in query: $sql " . mysqli_error($con));
 	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('delete Succesfuly');";
	echo "window.location = 'success_popup.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>