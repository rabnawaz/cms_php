<?php
	include("../includes/connect.php");

	$delete_id = $_GET['del'];

	$delete_query = "delete form posts where Post_id='$delete_id'";

	$run_delete = mysqli_query($connection , $delete_query);

	if($run_delete){
		echo "<script>window.open('edit.php?deleted=A post has been deleted' , '_self')</script>";
		echo "A Post record has been deleted";
	}


?>