<?php include 'app/Buku.php'; ?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Buku Baru</h3>
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
								<label for="judul">Judul</label>
								<input type="text" name="judul" class="form-control" placeholder="Masukan Judul...." value="<?php echo $judul; ?>" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="noisbn">NOISBN</label>
								<input type="text" name="noisbn" class="form-control" placeholder="Masukan NOISBN...." value="<?php echo $noisbn; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="penulis">Penulis</label>
								<input type="text" name="penulis" class="form-control" placeholder="Masukan Penulis...." value="<?php echo $penulis; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="noisbn">Penerbit</label>
								<input type="text" name="penerbit" class="form-control" placeholder="Masukan Penerbit...." value="<?php echo $penerbit; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="noisbn">Tahun</label>
								<input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun...." value="<?php echo $tahun; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
							</div>
						</div>												
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<div class="col-sm-12">
								<label for="stok">STOK</label>
								<input type="text" name="stok" class="form-control" placeholder="Masukan Stok...." value="<?php echo $stok; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="harga_pokok">Harga Pokok</label>
								<input type="text" name="harga_pokok" class="form-control" placeholder="Masukan Harga Pokok...." value="<?php echo $harga_pokok; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="harga_jual">Harga Jual</label>
								<input type="text" name="harga_jual" class="form-control" placeholder="Masukan Harga Jual...." value="<?php echo $harga_jual; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="ppn">PPN</label>
								<input type="text" name="ppn" class="form-control" placeholder="Masukan PPN...." value="<?php echo $ppn; ?>" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<label for="diskon">Diskon</label>
								<input type="text" name="diskon" class="form-control" placeholder="Masukan Diskon...." value="<?php echo $diskon; ?>" required>
							</div>
						</div>
					</div>
				</form>
			</div>		
		</div>
	</div>
</div>