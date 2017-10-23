<?php
	$table = 'pegawai';
	$primaryKey = 'id';
	$fill = 'nip, nama_pegawai, alamat_pegawai, telp_pegawai, tgl_lahir_pegawai, jenis_kelamin_pegawai';
	$id = '';
	$act = 'add';
	$nip = $nama_pegawai = $alamat_pegawai = $telp_pegawai = $tgl_lahir_pegawai = $jenis_kelamin_pegawai = $username = $password = $type_user = '';

	if (isset($_POST['simpan'])) {

		$act = $_POST['act'];
		
		$nip = $_POST['nip'];
		$nama_pegawai = $_POST['nama_pegawai'];
		$alamat_pegawai = $_POST['alamat_pegawai'];
		$telp_pegawai = $_POST['telp_pegawai'];
		$tgl_lahir_pegawai = date('Y-m-d', strtotime($_POST['tgl_lahir_pegawai']));
		$jenis_kelamin_pegawai = $_POST['jenis_kelamin_pegawai'];

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$type_user = $_POST['type_user'];

		switch ($act) {
			case 'add':
					$query = "INSERT INTO $table ($fill) VALUES ('$nip','$nama_pegawai','$alamat_pegawai','$telp_pegawai','$tgl_lahir_pegawai','$jenis_kelamin_pegawai')";

					$db->query($query);

					$insert_id = $db->insert_id;

					$query = "INSERT INTO login (username, password, type_user, pegawai_id) VALUES ('$username','$password','$type_user','$insert_id')";

				break;
			
			case 'edit':
					$id = $_POST['id'];

					$query = "UPDATE pegawai SET nip = '$nip', nama_pegawai = '$nama_pegawai', alamat_pegawai = '$alamat_pegawai', telp_pegawai = '$telp_pegawai', jenis_kelamin_pegawai = '$jenis_kelamin_pegawai' WHERE id = '$id'";

					$db->query($query);

					$query = "UPDATE login SET username = '$username', password = '$password', type_user = '$type_user' WHERE pegawai_id = '$id'";

				break;
		}		

		$db->query($query);

		?>
			<script>
				window.location.href = 'index.php?page=pegawai';
			</script>
		<?php
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		switch ($_GET['act']) {
			case 'edit':
				$data = $db->query("SELECT * FROM pegawai WHERE id = '$id'");
				$row = $data->fetch_assoc();

				$act = 'edit';

				$nip = $row['nip'];
				$nama_pegawai = $row['nama_pegawai'];
				$alamat_pegawai = $row['alamat_pegawai'];
				$telp_pegawai = $row['telp_pegawai'];
				$tgl_lahir_pegawai = $row['tgl_lahir_pegawai'];
				$jenis_kelamin_pegawai = $row['jenis_kelamin_pegawai'];

				$data = $db->query("SELECT * FROM login WHERE pegawai_id = '$id'");
				$row = $data->fetch_assoc();				

				$username = $row['username'];
				$type_user = $row['type_user'];

				break;
			
			case 'delete':
				$db->query("DELETE FROM pegawai WHERE id = '$id'");
				$db->query("DELETE FROM login WHERE pegawai_id = '$id'");

				?>
					<script>
						window.location.href = 'index.php?page=pegawai';
					</script>
				<?php
				break;
		}
	}

