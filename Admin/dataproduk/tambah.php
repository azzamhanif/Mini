<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Sub Kategori &raquo; Tambah Data</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){ // jika tombol 'Simpan' dengan properti name="add" pada baris 137 ditekan
				$id		     	 = $_POST['id'];
				$nama	 		 = $_POST['nama'];
				$deskripsi		 = $_POST['deskripsi'];
				$idkategori	 	 = $_POST['idkategori'];
				$idsub_kategori  = $_POST['idsub_kategori'];
				$file_gambar	 = $_POST['file_gambar'];
				$last_update	 = $_POST['last_update'];
				$idpegawai	 	 = $_POST['idpegawai'];
				$harga		     = $_POST['harga'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'"); // query untuk memilih entri dengan id terpilih
				$insert = mysqli_query($koneksi, "INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `idkategori`, `idsub_kategori`, `file_gambar`, `last_update`, `idpegawai`, `harga`) VALUES('$id', '$nama', '$deskripsi', '$idkategori', '$idsub_kategori', '$file_gambar', '$last_update', '$idpegawai', '$harga');") or die(mysqli_error()); // query untuk menambahkan data ke dalam database
				if($insert){ // jika query insert berhasil dieksekusi
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Produk Berhasil Di Simpan.</div>'; // maka tampilkan 'Data Produk Berhasil Di Simpan.'
				}else{ // jika query insert gagal dieksekusi
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Produk Gagal Di simpan!</div>'; // maka tampilkan 'Ups, Data Produk Gagal Di simpan!'
				}
				// else{ // mengecek jika id yang akan ditambahkan sudah ada dalam database
				// 	echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>ID Sudah Ada..!</div>'; // maka tampilkan 'ID Sudah Ada..!'
				// }
			}
			?>
			<!-- bagian ini merupakan bagian form untuk menginput data yang akan dimasukkan ke database -->
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Produk</label>
					<div class="col-sm-2">
						<input type="text" name="id" class="form-control" placeholder="Id Produk" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Produk</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Deskripsi</label>
					<div class="col-sm-2">
						<input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Kategori</label>
					<div class="col-sm-4">
						<input type="text" name="idkategori" class="form-control" placeholder="Id Kategori" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Sub Kategori</label>
					<div class="col-sm-2">
						<input type="text" name="idsub_kategori" class="form-control" placeholder="Id Sub Kategori" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">File Gambar</label>
					<div class="col-sm-4">
						<input type="text" name="file_gambar" class="form-control" placeholder="File Gambar" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Last Update</label>
					<div class="col-sm-2">
						<input type="text" name="last_update" class="form-control" placeholder="Last Update" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Pegawai</label>
					<div class="col-sm-4">
						<input type="text" name="idpegawai" class="form-control" placeholder="Id Pegawai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Harga</label>
					<div class="col-sm-4">
						<input type="text" name="harga" class="form-control" placeholder="Harga" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Kategori">
						<a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form> <!-- /form -->
		</div> <!-- /.content -->
