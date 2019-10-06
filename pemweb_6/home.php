<?php 
include 'koneksi.php'; 
$id = $_GET['id'];
$ambil = mysqli_query($conn ,"SELECT * FROM data_pribadi WHERE id_data_pribadi = $id");
$pecah = $ambil->fetch_array();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Web Profile</title>
</head>
<body>
	<header class="container">
		<div class="kata">
			<span class="nama"><?php echo $pecah['nama']; ?></span><br>
			<span class="jurusan"><?php echo $pecah['jurusan']; ?></span>
		</div>
		<div class="kontak">
			<img src="img/call.png" width="20">
			<a href="tel:082139502758">0821-3950-2758</a>
			<img src="img/envelope.png" width="20">
			<a href="mailto:boydiegolumwartono@gmail.com">boydiegolumwartono</a>
		</div>
		<div class="sosmed">
			<a href="https://www.instagram.com/boydiegol/?hl=id"><img src="img/instagram.png" width="30"></a>
			<a href="tel:082139502758"><img src="img/whatsapp.png" width="30"></a>
			<a href="tel:082139502758"><img src="img/facebook.png" width="30"></a>
		</div>
	</header>
	<div class="container_12">
		<div class="box grid_12">
			<div class="img grid_4">	
				<img src="img/foto.png" width="300">
			</div>	
			<div class="intro grid_7">
				<span class="nama"><?php echo $pecah['nama']; ?></span><br>
				<span class="jurusan"><?php echo $pecah['jurusan']; ?></span>
				<p><?php echo $pecah['intro']; ?></p><hr>
				<div class="keterangan grid_3">
					<p><b>TTL</b> &nbsp&nbsp&nbsp&nbsp: <?php echo $pecah['ttl']; ?></p>
					<p><b>Umur</b> &nbsp&nbsp: <?php echo $pecah['umur']; ?></p>
					<p><b>Alamat</b> : <?php echo $pecah['alamat']; ?></p>
					<p><b>Kota</b> &nbsp&nbsp&nbsp&nbsp: <?php echo $pecah['kota']; ?></p>
				</div>
				<div class="keterangan grid_3">
					<p><b>Telepon</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $pecah['telepon']; ?></p>
					<p><b>Jenis Kelamin</b> : <?php echo $pecah['jenis_kelamin']; ?></p>
					<p><b>Agama</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $pecah['agama']; ?></p>
				</div>
			</div>
			<div class="sosial grid_7">
				<a href="https://www.instagram.com/boydiegol/?hl=id"><img src="img/instagram.png" width="30"></a>
				<a href="tel:082139502758"><img src="img/whatsapp.png" width="30"></a>
				<a href="tel:082139502758"><img src="img/facebook.png" width="30"></a>
				<a href="mailto:boydiegolumwartono@gmail.com"><img src="img/envelope.png" width="30"></a>
			</div>
		</div>
		<?php  
		$ambil = mysqli_query($conn ,"SELECT * FROM riwayat_pendidikan WHERE id_data_pribadi = $id");
		$pecah = $ambil->fetch_array();
		?>
		<div class="box grid_12">
			<h3>RIWAYAT PENDIDIKAN</h3>
			<div class="kotak">
				<div class="kotak1 grid_3">
					<div class="pita">
						<h5>SD</h5>
					</div>
					<p>Tanggal Lulus : <?php echo $pecah['lulus_sd']; ?></p>
					<p>Nama Intitusi : <?php echo $pecah['nama_sd']; ?></p>
					<p>Kota Institusi : <?php echo $pecah['kota_sd']; ?></p>
				</div>
				<div class="kotak1 grid_3">
					<div class="pita">
						<h5>SMP</h5>
					</div>
					<p>Tanggal Lulus : <?php echo $pecah['lulus_smp']; ?></p>
					<p>Nama Intitusi : <?php echo $pecah['nama_smp']; ?></p>
					<p>Kota Institusi : <?php echo $pecah['kota_smp']; ?></p>
				</div>
				<div class="kotak1 grid_3">
					<div class="pita">
						<h5>SMA</h5>
					</div>
					<p>Tanggal Lulus : <?php echo $pecah['lulus_sma']; ?></p>
					<p>Nama Intitusi : <?php echo $pecah['nama_sma']; ?></p>
					<p>Kota Institusi : <?php echo $pecah['kota_sma']; ?></p>
				</div>
			</div>
		</div>
		<?php  
		$ambil = mysqli_query($conn ,"SELECT * FROM matkul1 WHERE id_data_pribadi = $id");
		$pecah = $ambil->fetch_array();
		?>
		<div class="matkul grid_12">
			<h2>MATA KULIAH YANG SAYA AMBIL</h2>
			<div class="kiri grid_5">
				<div class="judul">
					<h3>SEMESTER 1</h3>
				</div>
				<ul>
					<li><?php echo $pecah['nama1_matkul1']; ?></li>
					<li><?php echo $pecah['nama2_matkul1']; ?></li>
					<li><?php echo $pecah['nama3_matkul1']; ?></li>
					<li><?php echo $pecah['nama4_matkul1']; ?></li>
					<li><?php echo $pecah['nama5_matkul1']; ?></li>
					<li><?php echo $pecah['nama6_matkul1']; ?></li>
				</ul>
			</div>
			<div class="tengah grid_1"></div>
			<div class="kanan grid_5">
				<div class="judul">
					<h3>SEMESTER 2</h3>
				</div>
				<ul>
					<li>PBO</li>
					<li>Basis Data</li>
					<li>Bahasa Inggris Lanj.</li>
					<li>Aljabar Linear</li>
					<li>Agama Islam</li>
					<li>Sistem Informasi</li>
				</ul>
			</div>
			<div class="kiri grid_5">
				<div class="judul">
					<h3>SEMESTER 3</h3>
				</div>
				<ul>
					<li>Struktur Data</li>
					<li>Metode Numerik</li>
					<li>Pendidikan Kewarganegaraan</li>
					<li>Bela Negara</li>
					<li>Sistem Operasi</li>
					<li>Basis Data Lanj.</li>
					<li>OARKOM</li>
				</ul>
			</div>
			<div class="tengah grid_1"></div>
			<div class="kanan grid_5">
				<div class="judul">
					<h3>SEMESTER 4</h3>
				</div>
				<ul>
					<li>Jaringan Komputer</li>
					<li>Statistik Komputasi</li>
					<li>DAA</li>
					<li>ACVK</li>
					<li>RPL</li>
					<li>KWU</li>
				</ul>
			</div>
			<div class="kiri grid_5">
				<div class="judul">
					<h3>SEMESTER 5</h3>
				</div>
				<ul>
					<li>Arsitektur TI</li>
					<li>Metodologi Penelitian</li>
					<li>Pemrograman Web</li>
					<li>Audit TI</li>
					<li>PKL</li>
					<li>Analisis Citra</li>
					<li>Kecerdasan Buatan</li>
				</ul>
			</div>
			<div class="tengah grid_1"></div>
		</div>
	</div>
</body>
</html>