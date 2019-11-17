<?php 
$host = mysqli_connect('localhost','root','','Fashion');
$username = $_POST['username'];
$password = $_POST['pass'];

$query = mysqli_query($host, "SELECT * from pegawai where username ='".$username."' and password ='".$password."'");
$cek = mysqli_num_rows($query);
$result = mysqli_fetch_assoc($query);
// echo $cek;
if ($cek > 0 && $result['jabatan'] == 'Admin') {
	header("location:Admin/index.html");
	// echo $query;
	# code...
}
else if($cek > 0 && $result['jabatan'] == 'Manajer'){
	header("location:Manajer/index.php");
	// echo $cek;
} else{
	echo "Password dan username salah <br>";
	echo "<a href=\"index.php\">kembali</a>";
}
?>