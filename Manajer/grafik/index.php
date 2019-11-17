<!DOCTYPE html>
<html>
<head>
	<title>GRAFIK DATABASE FASHION</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>GRAFIK DATABASE FASHION<br/></h2>
	</center>
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Id Kategori</th>
				<th>Id Subkategori</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from produk");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['idkategori']; ?></td>
					<td><?php echo $d['idsub_kategori']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Baju", "Jam", "Sepatu",],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_baju = mysqli_query($koneksi,"select * from produk where nama='baju'");
					echo mysqli_num_rows($jumlah_baju);
					?>, 
					<?php 
					$jumlah_jam = mysqli_query($koneksi,"select * from produk where nama='jam'");
					echo mysqli_num_rows($jumlah_jam);
					?>, 
					<?php 
					$jumlah_sepatu = mysqli_query($koneksi,"select * from produk where nama='sepatu'");
					echo mysqli_num_rows($jumlah_sepatu);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>