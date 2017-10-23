<?php
	$table = 'buku';
	$primaryKey = 'id_buku';
	$fill = 'judul, noisbn, penulis, penerbit, tahun, stok, harga_pokok, harga_jual, ppn, diskon';
	$id = '';
	$act = 'add';
	$judul = $noisbn = $penulis = $penerbit = $tahun = $stok = $harga_pokok = $harga_jual = $ppn = $diskon = '';

	if (isset($_POST['simpan'])) {

		$act = $_POST['act'];
		
		$judul = $_POST['judul'];
		$noisbn = $_POST['noisbn'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun'];
		$stok = $_POST['stok'];
		$harga_pokok = $_POST['harga_pokok'];
		$harga_jual = $_POST['harga_jual'];
		$ppn = $_POST['ppn'];
		$diskon = $_POST['diskon']; 

		switch ($act) {
			case 'add':
					$query = "INSERT INTO $table ($fill) VALUES ('$judul','$noisbn','$penulis','$penerbit','$tahun','$stok','$harga_pokok','$harga_jual','$ppn','$diskon')";
				break;
			
			case 'edit':
					$id = $_POST['id'];

					$query = "UPDATE buku SET judul = '$judul', noisbn = '$noisbn', penulis = '$penulis', penerbit = '$penerbit', tahun = '$tahun', stok = '$stok', harga_pokok = '$harga_pokok', harga_jual = '$harga_jual', ppn = '$ppn', diskon = '$diskon' WHERE id_buku = '$id'";
				break;
		}

		$db->query($query);
		?>
			<script>
				window.location.href = 'index.php?page=buku';
			</script>
		<?php
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		switch ($_GET['act']) {
			case 'edit':
				$data = $db->query("SELECT * FROM buku WHERE id_buku = '$id'");
				$row = $data->fetch_assoc();

				$act = 'edit';

				$judul = $row['judul'];
				$noisbn = $row['noisbn'];
				$penulis = $row['penulis'];
				$penerbit = $row['penerbit'];
				$tahun = $row['tahun'];
				$stok = $row['stok'];
				$harga_pokok = $row['harga_pokok'];
				$harga_jual = $row['harga_jual'];
				$ppn = $row['ppn'];
				$diskon = $row['diskon'];

				break;
			
			case 'delete':
				$db->query("DELETE FROM buku WHERE id_buku = '$id'");

				?>
					<script>
						window.location.href = 'index.php?page=buku';
					</script>
				<?php
				break;
		}
	}

