<?php
// panggil file koneksi.php
require 'koneksi.php';

// tangkap variabel kd_mhs
$kd_mhs = $_POST['id'];

// query untuk menampilkan mahasiswa berdasarkan kd_mhs
$query = "SELECT * FROM mahasiswa WHERE kd_mhs=".$kd_mhs;
$hasil = $mysqli->query($query);

$data = $hasil->fetch_array(MYSQLI_ASSOC);

// jika kd_mhs > 0 / form ubah data
if($kd_mhs> 0) { 
	$nim = $data['nim'];
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$kelas = $data['kelas'];
	$kd_status = $data['status'];
	
	if($data['status']==1) {
		$status = "Aktif";
	} else {
		$status = "Tidak Aktif";
	}

//form tambah data
} else {
	$nim ="";
	$nama ="";
	$alamat ="";
	$kelas ="";
	$status = "";
}			
?>
<form class="form-horizontal" id="form-mahasiswa">
	<div class="control-group">
		<label class="control-label" for="nim">NIM</label>
		<div class="controls">
			<input type="text" id="nim" class="input-medium" name="nim" value="<?php echo $nim ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Nama</label>
		<div class="controls">
			<input type="text" id="nama" class="input-xlarge" name="nama" value="<?php echo $nama ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
		<div class="controls">
			<textarea id="alamat" name="alamat"><?php echo $alamat ?></textarea>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="kelas">Kelas</label>
		<div class="controls">
			<select class="input-small" name="kelas">
				<?php 
				// tampilkan untuk form ubah mahasiswa
				if($kd_mhs > 0) { ?>
					<option value="<?php echo $kelas ?>"><?php echo $kelas ?></option>
				<?php } ?>
				<option value="">--pilih--</option>
				<option value="3TIPS1">3TIPS1</option>
				<option value="3TIPS2">3TIPS2</option>
				<option value="3TIPS3">3TIPS3</option>
				<option value="3TIPS4">3TIPS4</option>
				<option value="3TIPS5">3TIPS5</option>
				<option value="3TIPS6">3TIPS6</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="status">Status</label>
		<div class="controls">
			<select class="input-medium" name="status">
				<?php 
				// tampilkan untuk form ubah mahasiswa
				if($kd_mhs > 0) { ?>
					<option value="<?php echo $kd_status ?>"><?php echo $status ?></option>
				<?php } ?>
				<option value="">--pilih--</option>
				<option value="1">Aktif</option>
				<option value="0">Tidak Aktif</option>
			</select>
		</div>
	</div>
</form>

<?php
	$hasil->free();
	/* close connection */
	$mysqli->close(); 
?>
