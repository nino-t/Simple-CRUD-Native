<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Buku</h3>
			</div>
			<div class="panel-body">
				<?php $no = 1; ?>
				<?php $query = $db->query("SELECT * FROM buku"); ?>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Buku</th>
							<th>NOISBN</th>
							<th>Penulis</th>
							<th>Penerbit</th>
							<th>Tahun</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($query->num_rows > 0) { ?>
							<?php while ($row = $query->fetch_assoc()) { ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $row['judul']; ?></td>
									<td><?php echo $row['noisbn']; ?></td>
									<td><?php echo $row['penulis']; ?></td>
									<td><?php echo $row['penerbit']; ?></td>
									<td><?php echo $row['tahun']; ?></td>
									<td><?php echo $row['stok']; ?></td>
									<td>
										<a href="index.php?page=buku_baru&act=edit&id=<?php echo $row['id_buku']; ?>" title="ubah" class="btn btn-success">Ubah</a>
										 -
										<a href="index.php?page=buku_baru&act=delete&id=<?php echo $row['id_buku']; ?>" title="hapus" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
									</td>
								</tr>
								<?php $no++; ?>							    
							<?php } ?>
						<?php }else{ ?>
							<tr>
								<td colspan="8">
									<center>
										Data Belum Tersedia
									</center>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<a href="index.php?page=buku_baru&act=add" title="Tambah" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
	</div>
</div>

