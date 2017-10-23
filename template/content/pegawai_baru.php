<?php include 'app/Pegawai.php'; ?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Pegawai Baru</h3>
			</div>
			<div class="panel-body">
				<?php if (isset($error)) { ?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Peringatan!</strong> <?php echo $error; ?> ...
					</div>					
				<?php } ?>

				<form action="" method="POST" class="form-horizontal" role="form">
					<input type="hidden" name="act" value="<?php echo $act; ?>">

					<?php $id = isset($_GET['id'])? $_GET['id']:''; ?>
					<input type="hidden" name="id" value="<?php echo $id; ?>">

					<div class="col-md-6">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="nip">NIP</label>
								<input type="text" name="nip" class="form-control" placeholder="Masukan NIP...." value="<?php echo $nip; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="nama_pegawai">Nama Pegawai</label>
								<input type="text" name="nama_pegawai" class="form-control" placeholder="Masukan Nama Pegawai...." value="<?php echo $nama_pegawai; ?>" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="alamat_pegawai">Alamat</label>
								<input type="text" name="alamat_pegawai" class="form-control" placeholder="Masukan Alamat...." value="<?php echo $alamat_pegawai; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="noisbn">Telphone</label>
								<input type="text" name="telp_pegawai" class="form-control" placeholder="Masukan Telp...." value="<?php echo $telp_pegawai; ?>" required>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="stok">Username</label>
								<input type="text" name="username" class="form-control" placeholder="Masukan Username...." value="<?php echo $username; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="harga_pokok">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Masukan Password...." value="<?php echo $password; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="type_user">TYPE User</label>
								<input type="text" name="type_user" class="form-control" placeholder="Masukan Type User...." value="<?php echo $type_user; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="jenis_kelamin_pegawai">Jenis Kelamin</label>
								<select name="jenis_kelamin_pegawai" id="jenis_kelamin_pegawai" class="form-control" required="required">
									<?php if (isset($jenis_kelamin_pegawai) && $jenis_kelamin_pegawai == 'L'): ?>
										<option value="L" selected="selected">Laki-Laki</option>
										<option value="P">Perempuan</option>
									<?php elseif (isset($jenis_kelamin_pegawai) && $jenis_kelamin_pegawai == 'P'): ?>
										<option value="L">Laki-Laki</option>
										<option value="P" selected="selected">Perempuan</option>
									<?php else: ?>
										<option value="">--SELECT JENIS KELAMIN--</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									<?php endif ?>
								</select>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="type_user">TGL Lahir</label>
								<input type="date" name="tgl_lahir_pegawai" class="form-control" value="<?php echo $tgl_lahir_pegawai; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
							</div>
						</div>												
					</div>
				</form>
			</div>		
		</div>
	</div>
</div>