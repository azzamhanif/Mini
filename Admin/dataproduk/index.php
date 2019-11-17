<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<!-- Start container -->
	<div class="container">
		<div class="content">
			<div class="jumbotron">
				<h1>Data Produk</h1>
				<p>Aplikasi Input Data Produk Menggunakan CRUD</p>
				<a href="data.php" data-toggle="tooltip" title="Lihat Data Produk" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Produk</a>
				<a href="tambah.php" data-toggle="tooltip" title="Tambah Data Produk" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user"></span> Tambah Data Produk</a>
			</div> <!-- /.jumbotron -->
		</div> <!-- /.content -->
	</div>
	<!-- End container -->
