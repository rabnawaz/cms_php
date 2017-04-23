<head>
    <title>Admin Panel</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.css" rel="stylesheet">
        <link href="../css/all.css" rel="stylesheet">
        <!-- Bootstrap -->
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
	<header class="admin-header">
		<h1><a href="index.php">Well come to Admin</a></h1>
	</header>
	<div class="admin-sidebar col-sm-3">
		<div id="sidebar" class="well sidebar-nav">
            <h3><i class="glyphicon glyphicon-home"></i>
                MANAGEMENT
            </h3>
            <ul class="nav nav-pills nav-stacked">
                <li class=""><a href="view_posts.php">Admin Logout</a></li>
                <li><a href="view_post.php?view=view">View Posts</a></li>
                <li><a href="insert_posts.php">Insert New Posts</a></li>
            </ul>
            
        </div>
	</div>
<section class="post_section col-xs-9">
    <?php
      	include("../includes/connect.php");
      	//include("view_post.php");
      	$edit_id = $_GET['edit'];
      	$query="select * from posts where Post_id=".$edit_id;
      	$result = mysqli_query($connection , $query);
      	while ($row=mysqli_fetch_array($result)) {
      		// echo "<pre>";
      		// print_r($row);
      		// echo "</pre>";
      		$form_id = $row['Post_id'];
      		$edit_title = $row['Post_title'];
      		$edit_author = $row['Post_author'];
      		$edit_image = $row['Post_image'];
      		$edit_content = $row['Post_content'];

        echo"
            <form method='post' action='edit.php?edit_form=$form_id'>
            	<h2>Update Post Now</h2>
                
                <div class='form-group'>
                <label for='author'>Post Author</label>
                  <input type='text' class='form-control' name='author' value='$edit_title'>
                </div>
                <div class='form-group'>
                <label for='author'>Post Image</label>
                  <input type='text' class='form-control' name='author' value='$edit_author'>
                </div>
                <div class='form-group'>
                <label for='comment'>Post Comment</label>
                  <textarea class='form-control' cols='40' rows='5' name='content'>
                  	$edit_content
                  </textarea>
                </div>
                <div class='form-group text-center'>
                  <input type='submit' class='btn btn-primary' name='update' value='Update Now'>
                </div>
            </form>
        ";
    }
?>

</section>
</body>
</html>
<?php
    //echo $update_id = $form_id;
    //$update_id = '';
    if(isset($_POST['update'])){
       echo  $update_id = $form_id;
        exit;
        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_content = $_POST['content'];
        //$post_image = $_POST['image'];
        echo "<pre>";
        print_r($update_id);
        echo "</pre>";
        
        $update_query = "update posts set post_title='$post_title','$post_date','$post_title','$post_author','$post_author' where Post_id='$update_id'";
        $run_update = mysqli_query($connection, $update_query);
        
        exit;
        if($update_query){
            echo "<script>alert('Post has been updated')</script>";
            //echo "<script>window.open('view.php','_self')</script>";
        }
    }

?>