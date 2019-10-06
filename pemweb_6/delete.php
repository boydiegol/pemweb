<?php 
include 'koneksi.php';

$ambil = mysqli_query($conn, "SELECT * FROM data_pribadi WHERE id_data_pribadi='$_GET[id]'");
$pecah = $ambil->fetch_array();

mysqli_query($conn, "DELETE FROM data_pribadi WHERE id_data_pribadi='$_GET[id]'");
mysqli_query($conn, "DELETE FROM riwayat_pendidikan WHERE id_data_pribadi='$_GET[id]'");
mysqli_query($conn, "DELETE FROM matkul1 WHERE id_data_pribadi='$_GET[id]'");

echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='index.php?halaman=galeri';</script>";

?>