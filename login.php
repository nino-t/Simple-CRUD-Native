<?php
	session_start();
	include 'app/config/config.php';

	if (isset($_SESSION['login'])) {
		header('location:index.php');
	}

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$cek = $db->query("SELECT * FROM login WHERE username = '$username' AND password = '$password'");
		if ($cek->num_rows == 1) {
			$row = $cek->fetch_assoc();

			$_SESSION['login'] = true;
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['level'] = $row['type_user'];
			$_SESSION['pegawai_id'] = $row['pegawai_id'];

			header('location:index.php');	
		}else{
			$error = 'Akun tidak ditemukan';
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Apotik | Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<?php if (isset($error)) { ?>
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Peringatan!</strong> <?php echo $error; ?> ...
							</div>					
						<?php } ?>

						<form action="" method="POST" class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-sm-12">
									<label for="username">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Masukan Username...." required autofocus>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" placeholder="Masukan Password...." required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary" name="login">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>