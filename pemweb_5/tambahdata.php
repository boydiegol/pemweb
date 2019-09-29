<?php  
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
	<title>Data</title>
</head>
<body>
	<style type="text/css">
		.kotak_form{text-align: center; height: 2000px; box-shadow: 2px 2px 2px 2px; background-color: white;}
		.form{margin: 10px 200px;}
		h2{margin-top: 50px;}
		form input {box-sizing: border-box; width: 100%; padding: 5px; margin-bottom: 5px;}
		p{color: red}
		label{float: left;}
		button{width: 150px;}
	</style>
	<div class="container_12">
		<div class="kotak_form grid_12" style="">
			<u><h1>Form Data</h1></u>	
			<div class="form">
				<form method="post">
					<h2>Data Pribadi</h2>   
					<label>Nama Lengkap</label>
					<input type="text" name="nama" required>

					<br><label>Jurusan</label>
					<input type="text" name="jurusan" required>

					<br><label>Pengenalan / Intro</label>
					<input type="text" name="intro" required>

					<br><label>TTL</label>
					<input type="text" name="ttl" required>

					<br><label>Umur</label>
					<input type="text" name="umur" required>

					<br><label>Alamat</label>
					<input type="text" name="alamat" required>

					<br><label>Kota</label>
					<input type="text" name="kota" required>

					<br><label>Telepon</label>
					<input type="text" name="telepon" required>

					<br><label>Jenis Kelamin</label>
					<input type="text" name="jk" required>

					<br><label>Agama</label>
					<input type="text" name="agama" required>
			
					<h2>Riwayat Pendidikan</h2>
					<h4>SD</h4>
					<label>Tahun Lulus</label>
					<input type="text" name="tanggal_lulus_sd" required>

					<br><label>Nama Institusi</label>
					<input type="text" name="nama_sd" required>

					<br><label>Kota Institusi</label>
					<input type="text" name="kota_sd" required>

					<h4>SMP</h4>
					<label>Tahun Lulus</label>
					<input type="text" name="tanggal_lulus_smp" required>

					<br><label>Nama Institusi</label>
					<input type="text" name="nama_smp" required>

					<br><label>Kota Institusi</label>
					<input type="text" name="kota_smp" required>

					<h4>SMA</h4>
					<label>Tahun Lulus</label>
					<input type="text" name="tanggal_lulus_sma" required>

					<br><label>Nama Institusi</label>
					<input type="text" name="nama_sma" required>

					<br><label>Kota Institusi</label>
					<input type="text" name="kota_sma" required>

					<h2>Matkul Semester 1</h2>
					<label>Matkul 1</label>
					<input type="text" name="matkul1" required>

					<br><label>Matkul 2</label>
					<input type="text" name="matkul2" required>

					<br><label>Matkul 3</label>
					<input type="text" name="matkul3" required>

					<br><label>Matkul 4</label>
					<input type="text" name="matkul4" required>

					<br><label>Matkul 5</label>
					<input type="text" name="matkul5" required>

					<br><label>Matkul 6</label>
					<input type="text" name="matkul6" required>

					<p>*Wajib Diisi Semua</p>
					<button type="Submit" name="submit">Submit</button>
				</form>
				<?php  
				if (isset($_POST['submit'])) {
					$nama = $_POST['nama'];
					$jurusan = $_POST['jurusan'];
					$intro = $_POST['intro'];
					$ttl = $_POST['ttl'];
					$umur = $_POST['umur'];
					$alamat = $_POST['alamat'];
					$kota = $_POST['kota'];
					$telepon = $_POST['telepon'];
					$jk = $_POST['jk'];
					$agama = $_POST['agama'];

					$lulus_sd = $_POST['tanggal_lulus_sd'];
					$nama_sd = $_POST['nama_sd'];
					$kota_sd = $_POST['kota_sd'];
					$lulus_smp = $_POST['tanggal_lulus_smp'];
					$nama_smp = $_POST['nama_smp'];
					$kota_smp = $_POST['kota_smp'];
					$lulus_sma = $_POST['tanggal_lulus_sma'];
					$nama_sma = $_POST['nama_sma'];
					$kota_sma = $_POST['kota_sma'];

					$matkul1 = $_POST['matkul1'];
					$matkul2 = $_POST['matkul2'];
					$matkul3 = $_POST['matkul3'];
					$matkul4 = $_POST['matkul4'];
					$matkul5 = $_POST['matkul5'];
					$matkul6 = $_POST['matkul6'];

					mysqli_query($conn, "INSERT INTO data_pribadi(nama,jurusan,intro,ttl,umur,alamat,kota,telepon,jenis_kelamin,agama) VALUES('$nama','$jurusan','$intro','$ttl','$umur','$alamat','$kota','$telepon','$jk','$agama')");

					$id_data_pribadi = $conn->insert_id;
					mysqli_query($conn, "INSERT INTO riwayat_pendidikan(id_data_pribadi,lulus_sd,nama_sd,kota_sd,lulus_smp,nama_smp,kota_smp,lulus_sma,nama_sma,kota_sma) VALUES('$id_data_pribadi','$lulus_sd','$nama_sd','$kota_sd','$lulus_smp','$nama_smp','$kota_smp','$lulus_sma','$nama_sma','$kota_sma')");

					mysqli_query($conn, "INSERT INTO matkul1(id_data_pribadi,nama1_matkul1,nama2_matkul1,nama3_matkul1,nama4_matkul1,nama5_matkul1,nama6_matkul1) VALUES('$id_data_pribadi','$matkul1','$matkul2','$matkul3','$matkul4','$matkul5','$matkul6')");
					
					echo "<div class='alert alert-success'>Data Tersimpan</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>