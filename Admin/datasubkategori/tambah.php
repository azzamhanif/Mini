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
				
				$cek = mysqli_query($koneksi, "SELECT * FROM subkategori WHERE id='$id'"); // query untuk memilih entri dengan id terpilih
				$insert = mysqli_query($koneksi, "INSERT INTO `subkategori` (`id`, `nama`) VALUES('$id', '$nama');") or die(mysqli_error()); // query untuk menambahkan data ke dalam database
				if($insert){ // jika query insert berhasil dieksekusi
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sub Kategori Berhasil Di Simpan.</div>'; // maka tampilkan 'Data Sub Kategori Berhasil Di Simpan.'
				}else{ // jika query insert gagal dieksekusi
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Sub Kategori Gagal Di simpan!</div>'; // maka tampilkan 'Ups, Data Sub Kategori Gagal Di simpan!'
				}
				// else{ // mengecek jika id yang akan ditambahkan sudah ada dalam database
				// 	echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>ID Sudah Ada..!</div>'; // maka tampilkan 'ID Sudah Ada..!'
				// }
			}
			?>
			<!-- bagian ini merupakan bagian form untuk menginput data yang akan dimasukkan ke database -->
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Sub Kategori</label>
					<div class="col-sm-2">
						<input type="text" name="id" class="form-control" placeholder="Id Sub Kategori" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Sub Kategori</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama Sub Kategori" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Sub Kategori">
						<a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form> <!-- /form -->
		</div> <!-- /.content -->
