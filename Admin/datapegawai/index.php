<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<!-- Start container -->
	<div class="container">
		<div class="content">
			<div class="jumbotron">
				<h1>Data Pegawai</h1>
				<p>Aplikasi input data pegawai menggunakan CRUD</p>
				<a href="data.php" data-toggle="tooltip" title="Lihat Data Pegawai" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Pegawai</a>
				<a href="tambah.php" data-toggle="tooltip" title="Tambah Data Pegawai" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user"></span> Tambah Data</a>
			</div> <!-- /.jumbotron -->
		</div> <!-- /.content -->
	</div>
	<!-- End container -->
