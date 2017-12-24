<?php 
session_start();
require_once("includes/conn.php");
?>
<?php 
		
		$delete_id = $_GET['del'];
		$query = "DELETE FROM `doctor` WHERE id = '$delete_id'";

		if (mysqli_query($conn,$query)) 
		{
			echo "<script>window.open('AllDoctors.php?deleted=data has been deleted...',' _self');</script>";
		}

 ?>