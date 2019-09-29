<?php include 'koneksi.php'; ?>
<h2>Data Pribadi</h2>
<table border="2" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Lulus SD</th>
			<th>Nama SD</th>
			<th>Kota SD</th>
			<th>Lulus SMP</th>
			<th>Nama SMP</th>
			<th>Kota SMP</th>
			<th>Lulus SMA</th>
			<th>Nama SMA</th>
			<th>Kota SMA</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
			$ambil = mysqli_query($conn, "SELECT * FROM riwayat_pendidikan JOIN data_pribadi ON riwayat_pendidikan.id_data_pribadi = data_pribadi.id_data_pribadi WHERE riwayat_pendidikan.id_data_pribadi = '$_GET[id]'"); 
			$pecah = $ambil->fetch_assoc();
			?> 
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['lulus_sd']; ?></td>
			<td><?php echo $pecah['nama_sd']; ?></td>
			<td><?php echo $pecah['kota_sd']; ?></td>
			<td><?php echo $pecah['lulus_smp']; ?></td>
			<td><?php echo $pecah['nama_smp']; ?></td>
			<td><?php echo $pecah['kota_smp']; ?></td>
			<td><?php echo $pecah['lulus_sma']; ?></td>
			<td><?php echo $pecah['nama_sma']; ?></td>
			<td><?php echo $pecah['kota_sma']; ?></td>
		</tr>
	</tbody>
</table>
<br><button><a href="index.php">Kembali</a></button>