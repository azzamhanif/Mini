<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>

	<?php 
	// isi nama host, username mysql, dan password mysql anda
	$host = mysqli_connect('localhost','root','','test');
	 
	if($host){
		echo "koneksi host berhasil.<br/>";
	}else{
		echo "koneksi gagal.<br/>";
	}
	?>

	<table style="border: 1px solid black; width: 50%">
		<thead>
			<th>id</th>
			<th>nama</th>
			<th>alamat</th>
			<th>pekerjaan</th>
			<th>Tools</th>
		</thead>
		<?php
		$query = mysqli_query($host, "Select * from user");
		while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["nama"]?></td>
			<td><?php echo $data["alamat"]?></td>
			<td><?php echo $data["pekerjaan"]?></td>
		</tr>
		<?php } ?>
	</table>

	<h1>FORM TAMBAH</h1>
	<form method="POST" name="form1">
		<table>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="add"></td>
			</tr>
		</table>
	</form>

	<!-- Menambah ke database -->
	<?php
	if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];

        // include database connection file
        // include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($host, "INSERT INTO user(nama,alamat,pekerjaan) VALUES('$nama','$alamat','$pekerjaan')");

        // Show message when user added
        echo "User added successfully.";
    }
	?>
	
</body>
</html>