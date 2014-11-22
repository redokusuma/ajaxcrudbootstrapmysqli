<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tutorial Membuat CRUD dengan JQuery - PHP - Bootstrap | Nugashare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="favicon.png"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>

<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="http://www.redokusuma.net">MYSQLI AJAX Bootstrap</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		
		<h3>Data Mahasiswa 
			<a href="#dialog-mahasiswa" id="0" class="btn tambah" data-toggle="modal">
				<i class="icon-plus"></i> Tambah Data
			</a>			
		</h3>
		<div id="loading" style="text-align: center;">
			<img src='img/ajax-loader.gif' />Loading... 
		</div>
		

		<!-- tempat untuk menampilkan data mahasiswa -->
		<div id="data-mahasiswa"></div>
		<center>
		Edited by <a href="http://www.redokusuma.net" target="_blank">redokusuma</a> | Powered By:  <a href="http://nugashare.com" target="_blank">Nugashare</a></center>
	</div>
</div>

<!-- awal untuk modal dialog -->
<div id="dialog-mahasiswa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Tambah Data Mahasiswa</h3>
	</div>
	<!-- tempat untuk menampilkan form mahasiswa -->
	<div class="modal-body"></div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
		<button id="simpan-mahasiswa" class="btn btn-success">Simpan</button>
	</div>
</div>
<!-- akhir kode modal dialog -->

<!-- memanggil berkas javascript yang dibutuhkan -->
<script src="jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="aplikasi.js"></script>

</body>
</html>