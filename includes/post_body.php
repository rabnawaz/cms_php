<section class="post_section col-xs-8">
   <?php
	   include("includes/connect.php");
	   $query = "select * from posts";

	   echo $query;

	   //echo $run = mysqli_query($query);

	   // while($row=mysql_fetch_array($connection, $run)){
	   // 		$title = $row['post_title'];
	   // }



	?>
	<!-- <h2><?php echo $title; ?></h2> -->
</section>