<?php include 'koneksi.php'; ?>
<h2>Data Pribadi</h2>
<table border="2" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Matkul 1</th>
			<th>Matkul 2</th>
			<th>Matkul 3</th>
			<th>Matkul 4</th>
			<th>Matkul 5</th>
			<th>Matkul 6</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
			$ambil = mysqli_query($conn, "SELECT * FROM data_pribadi JOIN matkul1 ON data_pribadi.id_data_pribadi = matkul1.id_data_pribadi WHERE data_pribadi.id_data_pribadi = '$_GET[id]'"); 
			$pecah = $ambil->fetch_assoc();
			?> 
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['nama1_matkul1']; ?></td>
			<td><?php echo $pecah['nama2_matkul1']; ?></td>
			<td><?php echo $pecah['nama3_matkul1']; ?></td>
			<td><?php echo $pecah['nama4_matkul1']; ?></td>
			<td><?php echo $pecah['nama5_matkul1']; ?></td>
			<td><?php echo $pecah['nama6_matkul1']; ?></td>
		</tr>
	</tbody>
</table>
<br><button><a href="index.php">Kembali</a></button>