<?php
	session_start();
	include 'app/config/config.php';

	if (empty($_SESSION['login'])) {
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Apotik Smart | PO</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>

	<?php include('template/header.php'); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">CONTROL PANEL</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item"><a href="index.php">DASHBOARD</a></li>
							<li class="list-group-item"><a href="index.php?page=pegawai">DATA PEGAWAI</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<?php if (empty($_GET['page'])) { ?>
					<?php include('template/content/dashboard.php'); ?>
				<?php }else{ ?>
					<?php include('template/content/'.$_GET['page'].'.php'); ?>
				<?php } ?>				
			</div>
		</div>
	</div>

	<?php include('template/footer.php'); ?>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>