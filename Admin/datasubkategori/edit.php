<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Sub Kategori &raquo; Edit Data</h2>
			<hr />
			
			<?php
			$id = $_GET['id']; // assigment id dengan nilai id yang akan diedit
			$sql = mysqli_query($koneksi, "SELECT * FROM subkategori WHERE id='$id'"); // query untuk memilih entri data dengan nilai id terpilih
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ // jika tombol 'Save' dengan properti name="save" pada baris 135 ditekan
				$id		         = $_POST['id'];
				$nama	 		 = $_POST['nama'];

				$update = mysqli_query($koneksi, "UPDATE subkategori SET nama='$nama'WHERE id='$id'") or die(mysqli_error()); // query untuk mengupdate nilai entri dalam database
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
					<label class="col-sm-3 control-label">Id Sub Kategori</label>
					<div class="col-sm-2">
						<input type="text" name="id" value="<?php echo $row ['id']; ?>" class="form-control" placeholder="Id Sub Kategori" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Sub Kategori</label>
					<div class="col-sm-4">
						<input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama " required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Sub Kategori">
						<a href="data.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> <!-- /.content -->
