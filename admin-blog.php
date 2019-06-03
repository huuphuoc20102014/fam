<?php
include './products-blog.php';
//Hiển thị
$obj_products = new products();
$total = $obj_products->getAll();
//phân trang
if (empty($_GET['p'])) {
	$product = $total;
} else {
	$product = $obj_products->getPage($_GET['p']);
}
$dem = 1;
//Tìm kiếm
$keyword = '';
if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
}
$product = $obj_products->getProducts($keyword);
//Hàm Delete
$id = '';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$obj_products->Delete($id);
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
	<link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
		ul.pagination{
			list-style: none;
			float: right;
		}
		ul.pagination li.active{
			font-weight: bold
		}
		ul.pagination li{
			float: left;
			display: inline-block;
			padding: 10px
		}
	</style>
</head>
<body>

	<!--Header-part-->
	<div id="header">
		<h1><a href="dashboard.html">Trang chủ</a></h1>
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
			<li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

			<li> <a href="protype.html"><i class="icon icon-th-list"></i> <span>Product Type</span></a></li>
			<li> <a href="manufactures.html"><i class="icon icon-th-list"></i> <span>Manufactures</span></a></li>
		</ul>
	</div>
	<!-- BEGIN CONTENT -->
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Blog</a></div>
			<h1>Manage blog</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"><a href="admin-add-blog.php"> <i class="icon-plus"></i> </a></span>
							<h5>blog</h5>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Hình</th>
										<th>Tên SP</th>
										<th>Loại</th>
										<th>Bảng Tin</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php foreach ($product as $products): ?>
									<tbody>
										<tr class="">
											<td><img src="<?php echo 'images/'.$products['blog_images']; ?>" /></td>
											<td><?php echo $products['blog_tieude']; ?></td>
											<td><?php echo $products['category_blog_id']; ?></td>
											<td><?php echo $products['blog_bangtin']; ?></td>
											<td>
												<a href="form.html" class="btn btn-success btn-mini">Edit</a>

												<a href="../fam/admin-blog.php?id=<?php echo $products['blog_id'] ?>" class="btn btn-danger btn-mini">Delete</a>
											</td>
										</tr>
									</tbody>
								<?php endforeach; ?>
							</table>
							<ul class="pagination">
								<li class="active"><a href="">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
	<!--Footer-part-->
	<div class="row-fluid">
		<div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
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

