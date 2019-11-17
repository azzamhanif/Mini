<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Produk &raquo; Edit Data</h2>
			<hr />
			
			<?php
			$id = $_GET['id']; // assigment id dengan nilai id yang akan diedit
			$sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'"); // query untuk memilih entri data dengan nilai id terpilih
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ // jika tombol 'Save' dengan properti name="save" pada baris 135 ditekan
				$id		     	 = $_POST['id'];
				$nama	 		 = $_POST['nama'];
				$deskripsi		 = $_POST['deskripsi'];
				$idkategori	 	 = $_POST['idkategori'];
				$idsub_kategori  = $_POST['idsub_kategori'];
				$file_gambar	 = $_POST['file_gambar'];
				$last_update	 = $_POST['last_update'];
				$idpegawai	 	 = $_POST['idpegawai'];
				$harga		     = $_POST['harga'];

				$update = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', idkategori='$idkategori', idsub_kategori='$idsub_kategori', file_gambar='$file_gambar', last_update='$last_update', idpegawai='$idpegawai', harga='$harga' WHERE id='$id'") or die(mysqli_error()); // query untuk mengupdate nilai entri dalam database
				if($update){ // jika query update berhasil dieksekusi
					header("Location: edit.php?id=".$id."&pesan=sukses"); // tambahkan pesan=sukses pada url
				}else{ // jika query update gagal dieksekusi
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>'; // maka tampilkan 'Data gagal disimpan, silahkan coba lagi.'
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){ // jika terdapat pesan=sukses sebagai bagian dari berhasilnya query update dieksekusi
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>'; // maka tampilkan 'Data berhasil disimpan.'
			}
			?>
			<!-- bagian ini merupakan bagian form untuk mengupdate data yang akan dimasukkan ke database -->
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Produk</label>
					<div class="col-sm-2">
						<input type="text" name="id" value="<?php echo $row ['id']; ?>" class="form-control" placeholder="Id Produk" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Produk</label>
					<div class="col-sm-4">
						<input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama Produk " required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Deskripsi</label>
					<div class="col-sm-8">
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
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Produk">
						<a href="data.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> <!-- /.content -->
