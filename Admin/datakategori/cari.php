<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<?php $id = $_POST['cariid']; // mengambil id dari form cari ?> 
			<h2>Pencarian Data Kategori &raquo; Id Kategori: <?php echo $id; // menampilkan id ?></h2>
			<hr />
			
			<?php
			$sql = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'"); // query untuk memilih entri dengan id terpilih
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){ // jika tombol 'Hapus Data' pada baris 74 ditekan
				$delete = mysqli_query($koneksi, "DELETE FROM kategori WHERE id='$id'"); // query delete entri dengan id terpilih
				if($delete){ // jika query delete berhasil dieksekusi
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>'; // maka tampilkan 'Data berhasil dihapus.'
				}else{ // jika query delete gagal dieksekusi
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>'; // maka tampilkan 'Data gagal dihapus.'
				}
			}
			?>
			<!-- bagian ini digunakan untuk menampilkan data kategori hasil pencarian-->
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">Id Kategori</th>
					<td><?php echo $row['id']; ?></td>
				</tr>
				<tr>
					<th>Nama Kategori</th>
					<td><?php echo $row['nama']; ?></td>
				</tr>
			</table>
			
			<a href="data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Kembali</a>
		</div> <!-- /.content -->
	</div> <!-- /.container -->