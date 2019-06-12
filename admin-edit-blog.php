<?php
$conn = mysqli_connect("localhost", "root", "", "fam");
if($conn) {
	//if connection has been established display connected.
	echo "connected";
}
//if button with the name uploadfilesub has been clicked
$id = $_GET['id'];
if(isset($_POST['update'])) {
	//declaring variables
	$filename = $_FILES['blog_images']['name'];
	$filetmpname = $_FILES['blog_images']['tmp_name'];
	$blog_tieude = mysqli_real_escape_string($conn, $_POST['blog_tieude']);
	$blog_bangtin = mysqli_real_escape_string($conn, $_POST['blog_bangtin']);
	//$blog_tieude = mysqli_real_escape_string($conn, $_POST['blog_tieude']);
	//folder where images will be uploaded
	$folder = './images/';
	//function for saving the uploaded images in a specific folder
	move_uploaded_file($filetmpname, $folder.$filename);
	//inserting image details (ie image name) in the database
	$sql = "UPDATE `blog` SET `blog_images`='$filename', `blog_tieude` = '$blog_tieude', `blog_bangtin` = '$blog_bangtin' WHERE `blog_id` = $id";
	$qry = mysqli_query($conn,  $sql);
	if( $qry) {
		echo "image update";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fam Admin update blog</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="public/css/uniform.css" />
	<link rel="stylesheet" href="public/css/select2.css" />
	<link rel="stylesheet" href="public/css/matrix-style.css" />
	<link rel="stylesheet" href="public/css/matrix-media.css" />
	<link href="../public/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
	//database connetion
	//$con=mysqli_connect("localhost","root","","fam");
	//$id=$_GET['id'];
	$select=mysqli_query($conn,"select * from blog where blog_id='$id'");
	$products=mysqli_fetch_assoc($select);
	?>
	<!--Header-part-->
	<div id="header">
		<h1><a href="admin-blog.php">Trang Chủ</a></h1>
	</div>
	<!--close-Header-part-->

	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
		<ul class="nav">
			<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
					<li class="divider"></li>
					<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
					<li class="divider"></li>
					<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
					<li class="divider"></li>
					<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
					<li class="divider"></li>
					<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
				</ul>
			</li>
			<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
			<li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
		</ul>
	</div>

	<!--start-top-serch-->
	<div id="search">
		<form action="result.html" method="get">
			<input type="text" placeholder="Search here..." name="key"/>
			<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
		</form>
	</div>
	<!--close-top-serch-->

	<!--sidebar-menu-->

	<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
		<ul>
			<li><a href="admin-blog.php"><i class="icon icon-home"></i> <span>Dashboard Blog</span></a> </li>
			<li> <a href="admin-edit-blog.php"><i class="icon icon-th-list"></i> <span>Page Edit</span></a></li>
		</ul>
	</div>

	<!-- BEGIN CONTENT -->
	<div id="content">

		<div id="content-header">
			<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Add blog</a></div>
			<h1>Edit Blog</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
							<h5>Điền chi tiết sản phẩm</h5>
						</div>
						<div class="widget-content nopadding">

							<!-- BEGIN USER FORM -->
							<form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data">
								<div class="control-group">
									<label class="control-label">Tiêu đề :</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Tiêu đề..." name="blog_tieude" value="<?=$products['blog_tieude'];?>" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Loại file :</label>
									<div class="controls">
										<select name="category_blog_id">
											<option value="1">Image</option>
											<option value="2">Video</option>
										</select> *
									</div>
									<div class="view-img" style="text-align: center;">
										<img src="images/<?php echo $products['blog_images'];?>" style="width: 100px;" alt="image-sp">
									</div>
									<div class="control-group">
										<label class="control-label">Chọn file :</label>
										<div class="controls">
											<input type="file" name="blog_images" id="fileUpload">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"  >Bảng tin: </label>
										<div class="controls">
											<!-- <textarea type="text" class="span11" placeholder="Bảng tin..." name = "blog_bangtin" value="<?=$products['blog_bangtin'];?>"></textarea> -->

											<input type="text" class="span11" placeholder="Bảng tin..." name="blog_bangtin" value="<?=$products['blog_bangtin'];?>" /> *
										</div>
										<div class="form-actions">
											<!-- <button type="submit" name="update" value="update" class="btn btn-success">Sửa đổi</button> -->
											<input type="submit" name="update" value="Edit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
		<!--Footer-part-->
		<div class="row-fluid">
			<div id="footer" class="span12"> 2019 &copy; Web Fam</div>
		</div>
		<!--end-Footer-part-->
		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/jquery.ui.custom.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/jquery.uniform.js"></script>
		<script src="public/js/select2.min.js"></script>
		<script src="public/js/jquery.dataTables.min.js"></script>
		<script src="public/js/matrix.js"></script>
		<script src="public/js/matrix.tables.js"></script>
	</body>
	</html>