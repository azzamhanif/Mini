<?php

// ambil data file
$namaFile = $_FILES['file_gambar']['name'];
$namaSementara = $_FILES['file_gambar']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "img/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

// if ($terupload) {
// 	header("location:TambahProduk.php");
//     // echo "Upload berhasil!<br/>";
//     // echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
// } 
// else {
//     echo "Upload Gagal!";
// }
?>
