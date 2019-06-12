<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "fam");
if($conn) {
	//if connection has been established display connected.
	echo "connected";
}
//if button with the name uploadfilesub has been clicked
if(isset($_POST['upload'])) {
	//declaring variables
	$filename = $_FILES['uploadfile']['name'];
	$filetmpname = $_FILES['uploadfile']['tmp_name'];
	$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
	$product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
	$mota = mysqli_real_escape_string($conn, $_POST['mota']);
	//folder where images will be uploaded
	$folder = './images/';
	//function for saving the uploaded images in a specific folder
	move_uploaded_file($filetmpname, $folder.$filename);
	//inserting image details (ie image name) in the database
	$sql = "INSERT INTO `fam` (`product_images`, `product_name`, `product_price`, `mota`)  VALUES ('$filename', '$product_name', '$product_price', 'mota')";
	$qry = mysqli_query($conn,  $sql);
	if( $qry) {
		echo "image uploaded";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fam Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
			<li><a href="admin-home.php"><i class="icon icon-home"></i> <span>Dashboard Home</span></a> </li>
			<li> <a href="admin-add-home.php"><i class="icon icon-th-list"></i> <span>Page Add</span></a></li>



		</ul>
	</div>

	<!-- BEGIN CONTENT -->
	<div id="content">

		<div id="content-header">
			<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Add Home</a></div>
			<h1>Add New Home</h1>
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
							<form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="control-group">
									<label class="control-label">Tiêu đề :</label>
									<div class="controls">
										<input type="text" class="span11" placeholder="Tiêu đề..." name="product_name" /> *
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Loại file :</label>
									<div class="controls">
										<select name="category_blog_id">
											<option value="1">Rau</option>
											<option value="2">Củ</option>
											<option value="3">Quả</option>
											<option value="4">Hạt</option>
										</select> *
									</div>
									<div class="control-group">
										<label class="control-label">Chọn file :</label>
										<div class="controls">
											<input type="file" name="uploadfile" id="fileUpload">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Giá bán :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="price" name = "product_price" /> *
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Mô tả :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="price" name = "mota" /> *
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" name="upload" value="Upload" class="btn btn-success">Add</button>
									</div>
								</form>
								<!-- END USER FORM -->
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
