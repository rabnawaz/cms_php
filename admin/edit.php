This is edit php

<?php
	include("../includes/connect.php");
	include("view_post.php");
	$page_id = $_GET['id'];
	$query="select * from posts where Post_id=".$page_id;
	//include("index.php");
	//$id = $_GET['id'];

?>