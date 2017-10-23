<div class="row">
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Buku</h3>
			</div>
			<div class="panel-body">
				<?php $no = 1; ?>
				<?php $query = $db->query("SELECT * FROM pegawai"); ?>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>NIP</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Tgl Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($query->num_rows > 0) { ?>
							<?php while ($row = $query->fetch_assoc()) { ?>
								<tr class="text-center">
									<td><?php echo $no; ?></td>
									<td><?php echo $row['nip']; ?></td>
									<td><?php echo $row['nama_pegawai']; ?></td>
									<td><?php echo $row['telp_pegawai']; ?></td>
									<td><?php echo date('d/m/Y', strtotime($row['tgl_lahir_pegawai'])); ?></td>
									<td><?php echo $row['jenis_kelamin_pegawai']; ?></td>
									<td>
										<a href="index.php?page=pegawai_baru&act=edit&id=<?php echo $row['id']; ?>" title="ubah" class="btn btn-success btn-xs">Ubah</a>
										<a href="index.php?page=pegawai_baru&act=delete&id=<?php echo $row['id']; ?>" title="hapus" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
									</td>
								</tr>
								<?php $no++; ?>							    
							<?php } ?>
						<?php }else{ ?>
							<tr>
								<td colspan="20">
									<center>
										Data Belum Tersedia.
									</center>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<a href="index.php?page=pegawai_baru&act=add" title="Tambah" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
	</div>
</div>

