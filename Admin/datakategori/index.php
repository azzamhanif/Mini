<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<!-- Start container -->
	<div class="container">
		<div class="content">
			<div class="jumbotron">
				<h1>Data Kategori</h1>
				<p>Aplikasi input data kategori menggunakan CRUD</p>
				<a href="data.php" data-toggle="tooltip" title="Lihat Data Kategori" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Kategori</a>
				<a href="tambah.php" data-toggle="tooltip" title="Tambah Data Kategori" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user"></span> Tambah Data Kategori</a>
			</div> <!-- /.jumbotron -->
		</div> <!-- /.content -->
	</div>
	<!-- End container -->
